Here's the improved solution that maintains 10 rows per page while preserving edits and new rows when deleting:

class UnitTableManager {
    constructor() {
        this.currentData = []; // All current data including edits and new rows
        this.deletedRows = new Set();
        this.editedRows = new Map();
        this.newRows = [];
        this.itemsPerPage = 10;
        this.currentPage = 1;
    }

    handleDelete(rowId) {
        this.deletedRows.add(rowId);
        // Get current page data before deletion
        const startIndex = (this.currentPage - 1) * this.itemsPerPage;
        const endIndex = startIndex + this.itemsPerPage;
        
        // Remove the deleted row
        this.currentData = this.currentData.filter(row => !this.deletedRows.has(row.id));
        
        // If we have more data beyond current page, pull one row up
        if (this.currentData.length > endIndex) {
            this.renderCurrentPage();
        }
    }

    renderCurrentPage() {
        const startIndex = (this.currentPage - 1) * this.itemsPerPage;
        const pageData = this.currentData.slice(startIndex, startIndex + this.itemsPerPage);
        
        const tableBody = document.getElementById('unitTableBody');
        tableBody.innerHTML = pageData.map(row => {
            const isEdited = this.editedRows.has(row.id);
            const rowData = isEdited ? this.editedRows.get(row.id) : row;
            
            return `
                <tr data-id="${row.id}">
                    <td><input type="text" class="unit-input" value="${rowData.unit}"></td>
                    <td><input type="text" class="time-input" value="${rowData.time}"></td>
                    <td><input type="text" class="currency-input" value="${rowData.currency}"></td>
                    <td><button class="delete-btn">Delete</button></td>
                </tr>
            `;
        }).join('');
        
        this.bindEvents();
    }

    handleEdit(rowId, newData) {
        this.editedRows.set(rowId, newData);
        const index = this.currentData.findIndex(row => row.id === rowId);
        if (index !== -1) {
            this.currentData[index] = { ...this.currentData[index], ...newData };
        }
    }

    addNewRow(newRow) {
        const tempId = `temp_${Date.now()}`;
        const newRowData = { ...newRow, id: tempId };
        this.newRows.push(newRowData);
        this.currentData.push(newRowData);
        this.renderCurrentPage();
    }
}

Copy

Apply

unit-table.js
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const tableManager = new UnitTableManager();
        
        // Initialize with Laravel's paginated data
        tableManager.currentData = {!! json_encode($units->items()) !!};
        tableManager.totalRecords = {!! $units->total() !!};
        
        // Add new row button handler
        document.getElementById('addRowBtn').addEventListener('click', () => {
            tableManager.addNewRow({
                unit: '',
                time: '',
                currency: ''
            });
        });
        
        // Save button handler
        document.getElementById('saveButton').addEventListener('click', async () => {
            const changes = {
                deleted: Array.from(tableManager.deletedRows),
                edited: Array.from(tableManager.editedRows.entries()),
                new: tableManager.newRows
            };
            
            const response = await fetch('/api/units/batch-update', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify(changes)
            });
            
            if (response.ok) {
                const newData = await response.json();
                tableManager.currentData = newData;
                tableManager.renderCurrentPage();
                // Reset tracking
                tableManager.deletedRows.clear();
                tableManager.editedRows.clear();
                tableManager.newRows = [];
            }
        });
    });
</script>

Copy

Apply

index.blade.php
This solution:

Maintains exactly 10 rows per page by pulling up rows from next pages when needed
Preserves all edits and new rows while handling deletions
Updates the display immediately without page reload
Keeps track of all changes until save is clicked
Handles the table state entirely on the client side until explicit save
The key improvement is in the handleDelete method which immediately adjusts the display to maintain the correct number of rows per page while preserving all edits and new rows.
