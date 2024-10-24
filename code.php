Excellent question! Displaying error messages for specific inputs is crucial for a good user experience. Since you're using AJAX for form submission and have a custom UnitRequest for validation, we'll need to modify both the backend and frontend to handle and display these errors correctly. Here's how you can achieve this:

Backend (Laravel):
First, ensure your UnitRequest is set up correctly:

// app/Http/Requests/UnitRequest.php
class UnitRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'symbol' => 'required|max:50',
            'note' => 'nullable|max:1000',
            // Add any other rules you need
        ];
    }
}



Modify your UnitController to use this request and return validation errors:

// app/Http/Controllers/UnitController.php
use App\Http\Requests\UnitRequest;

class UnitController extends Controller
{
    public function update(UnitRequest $request, $id)
    {
        $unit = Unit::findOrFail($id);
        $unit->update($request->validated());
        return response()->json(['success' => true]);
    }

    public function store(UnitRequest $request)
    {
        $unit = Unit::create($request->validated());
        return response()->json(['success' => true, 'id' => $unit->id]);
    }
}



Frontend (JavaScript):
Update your JavaScript to handle and display these errors:

@section('scripts')
<script>
$(document).ready(function() {
    // Function to display errors
    function displayErrors(errors, row) {
        // Clear previous errors
        row.find('.error-message').remove();
        row.find('.is-invalid').removeClass('is-invalid');

        // Display new errors
        $.each(errors, function(field, messages) {
            var input = row.find(`input[name="${field}"]`);
            input.addClass('is-invalid');
            input.after(`<div class="invalid-feedback error-message">${messages[0]}</div>`);
        });
    }

    // Update unit on input change
    $('.unit-table').on('change', 'input', function() {
        var row = $(this).closest('tr');
        var id = row.data('id');
        var data = {
            id: id,
            name: row.find('input[name="name"]').val(),
            symbol: row.find('input[name="symbol"]').val(),
            note: row.find('input[name="note"]').val()
        };

        $.ajax({
            url: '/units/' + id,
            method: 'PUT',
            data: data,
            success: function(response) {
                console.log('Updated successfully');
                // Clear any existing errors
                row.find('.error-message').remove();
                row.find('.is-invalid').removeClass('is-invalid');
            },
            error: function(xhr) {
                if (xhr.status === 422) {
                    var errors = xhr.responseJSON.errors;
                    displayErrors(errors, row);
                }
            }
        });
    });

    // Save new unit
    $('.unit-table').on('click', '.save-new-unit', function() {
        var row = $(this).closest('tr');
        var type = row.closest('.unit-table').data('type');
        var data = {
            type: type,
            name: row.find('input[name="name"]').val(),
            symbol: row.find('input[name="symbol"]').val(),
            note: row.find('input[name="note"]').val()
        };

        $.ajax({
            url: '/units',
            method: 'POST',
            data: data,
            success: function(response) {
                row.data('id', response.id);
                row.find('td:last').html(`
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">
                            ⋮
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item delete-unit" href="#">Delete</a>
                        </div>
                    </div>
                `);
                console.log('Added successfully');
                // Clear any existing errors
                row.find('.error-message').remove();
                row.find('.is-invalid').removeClass('is-invalid');
            },
            error: function(xhr) {
                if (xhr.status === 422) {
                    var errors = xhr.responseJSON.errors;
                    displayErrors(errors, row);
                }
            }
        });
    });

    // ... (other functions remain the same) ...
});
</script>
@endsection



CSS (for styling error messages):
Add this CSS to your stylesheet or in a <style> tag in your blade file:

.is-invalid {
    border-color: #dc3545;
}

.invalid-feedback {
    display: block;
    width: 100%;
    margin-top: .25rem;
    font-size: 80%;
    color: #dc3545;
}



Blade Template Update:
Ensure your inputs have the correct name attributes matching your validation rules:

<td><input type="text" name="name" value="{{ $unit->name }}" class="form-control"></td>
<td><input type="text" name="symbol" value="{{ $unit->symbol }}" class="form-control"></td>
<td><input type="text" name="note" value="{{ $unit->note }}" class="form-control"></td>



These changes will:

Use the UnitRequest for validation in your controller.
Return validation errors as a JSON response when validation fails.
Display error messages below the specific input that failed validation.
Add visual indicators (red border) to inputs with errors.
Clear error messages when a successful update or insert occurs.
This approach provides immediate, inline feedback to users about validation errors, enhancing the user experience and making it clear which fields need attention.

Remember to adjust the field names and error styling to match your specific requirements and design preferences.



Try again with different context
Add conte

Excellent question! Displaying error messages for specific inputs is crucial for a good user experience. Since you're using AJAX for form submission and have a custom UnitRequest for validation, we'll need to modify both the backend and frontend to handle and display these errors correctly. Here's how you can achieve this:

Backend (Laravel):
First, ensure your UnitRequest is set up correctly:

// app/Http/Requests/UnitRequest.php
class UnitRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'symbol' => 'required|max:50',
            'note' => 'nullable|max:1000',
            // Add any other rules you need
        ];
    }
}



Modify your UnitController to use this request and return validation errors:

// app/Http/Controllers/UnitController.php
use App\Http\Requests\UnitRequest;

class UnitController extends Controller
{
    public function update(UnitRequest $request, $id)
    {
        $unit = Unit::findOrFail($id);
        $unit->update($request->validated());
        return response()->json(['success' => true]);
    }

    public function store(UnitRequest $request)
    {
        $unit = Unit::create($request->validated());
        return response()->json(['success' => true, 'id' => $unit->id]);
    }
}



Frontend (JavaScript):
Update your JavaScript to handle and display these errors:

@section('scripts')
<script>
$(document).ready(function() {
    // Function to display errors
    function displayErrors(errors, row) {
        // Clear previous errors
        row.find('.error-message').remove();
        row.find('.is-invalid').removeClass('is-invalid');

        // Display new errors
        $.each(errors, function(field, messages) {
            var input = row.find(`input[name="${field}"]`);
            input.addClass('is-invalid');
            input.after(`<div class="invalid-feedback error-message">${messages[0]}</div>`);
        });
    }

    // Update unit on input change
    $('.unit-table').on('change', 'input', function() {
        var row = $(this).closest('tr');
        var id = row.data('id');
        var data = {
            id: id,
            name: row.find('input[name="name"]').val(),
            symbol: row.find('input[name="symbol"]').val(),
            note: row.find('input[name="note"]').val()
        };

        $.ajax({
            url: '/units/' + id,
            method: 'PUT',
            data: data,
            success: function(response) {
                console.log('Updated successfully');
                // Clear any existing errors
                row.find('.error-message').remove();
                row.find('.is-invalid').removeClass('is-invalid');
            },
            error: function(xhr) {
                if (xhr.status === 422) {
                    var errors = xhr.responseJSON.errors;
                    displayErrors(errors, row);
                }
            }
        });
    });

    // Save new unit
    $('.unit-table').on('click', '.save-new-unit', function() {
        var row = $(this).closest('tr');
        var type = row.closest('.unit-table').data('type');
        var data = {
            type: type,
            name: row.find('input[name="name"]').val(),
            symbol: row.find('input[name="symbol"]').val(),
            note: row.find('input[name="note"]').val()
        };

        $.ajax({
            url: '/units',
            method: 'POST',
            data: data,
            success: function(response) {
                row.data('id', response.id);
                row.find('td:last').html(`
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">
                            ⋮
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item delete-unit" href="#">Delete</a>
                        </div>
                    </div>
                `);
                console.log('Added successfully');
                // Clear any existing errors
                row.find('.error-message').remove();
                row.find('.is-invalid').removeClass('is-invalid');
            },
            error: function(xhr) {
                if (xhr.status === 422) {
                    var errors = xhr.responseJSON.errors;
                    displayErrors(errors, row);
                }
            }
        });
    });

    // ... (other functions remain the same) ...
});
</script>
@endsection



CSS (for styling error messages):
Add this CSS to your stylesheet or in a <style> tag in your blade file:

.is-invalid {
    border-color: #dc3545;
}

.invalid-feedback {
    display: block;
    width: 100%;
    margin-top: .25rem;
    font-size: 80%;
    color: #dc3545;
}



Blade Template Update:
Ensure your inputs have the correct name attributes matching your validation rules:

<td><input type="text" name="name" value="{{ $unit->name }}" class="form-control"></td>
<td><input type="text" name="symbol" value="{{ $unit->symbol }}" class="form-control"></td>
<td><input type="text" name="note" value="{{ $unit->note }}" class="form-control"></td>



These changes will:

Use the UnitRequest for validation in your controller.
Return validation errors as a JSON response when validation fails.
Display error messages below the specific input that failed validation.
Add visual indicators (red border) to inputs with errors.
Clear error messages when a successful update or insert occurs.
This approach provides immediate, inline feedback to users about validation errors, enhancing the user experience and making it clear which fields need attention.

Remember to adjust the field names and error styling to match your specific requirements and design preferences.

Try again with different context
Add context...
Avatar for honhatminh1510-cfizq
How about i separate the table data into another page call table_unit.blade.php and i will include this into unit.blade.php. When i click to another nav-item, it will call ajax and show the exact table for this table. By this way, i wont repeat the table. One more thing, the unit of data type and the unit of time has the same table structure with 5 collumn like this example above, the unit of currency table has 1 more collumn call country. Show me the code to do this


Certainly! This is a great approach to reduce code duplication and improve maintainability. I'll show you how to implement this structure with separate table templates and dynamic loading based on the selected tab. Here's how you can set it up:

Create separate blade files for each table:
resources/views/tables/table_unit_time.blade.php and resources/views/tables/table_unit_data.blade.php:

<button class="btn btn-primary add-row" data-type="{{ $type }}">Add New Row</button>
<table class="table unit-table" data-type="{{ $type }}">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Symbol</th>
            <th>Note</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($units as $index => $unit)
        <tr data-id="{{ $unit->id }}">
            <td><input type="text" name="ordinal" value="{{ $index + 1 }}" class="form-control" readonly></td>
            <td><input type="text" name="name" value="{{ $unit->name }}" class="form-control"></td>
            <td><input type="text" name="symbol" value="{{ $unit->symbol }}" class="form-control"></td>
            <td><input type="text" name="note" value="{{ $unit->note }}" class="form-control"></td>
            <td>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">⋮</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item delete-unit" href="#">Delete</a>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>



resources/views/tables/table_unit_currency.blade.php:

<button class="btn btn-primary add-row" data-type="currency">Add New Row</button>
<table class="table unit-table" data-type="currency">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Symbol</th>
            <th>Note</th>
            <th>Country</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($units as $index => $unit)
        <tr data-id="{{ $unit->id }}">
            <td><input type="text" name="ordinal" value="{{ $index + 1 }}" class="form-control" readonly></td>
            <td><input type="text" name="name" value="{{ $unit->name }}" class="form-control"></td>
            <td><input type="text" name="symbol" value="{{ $unit->symbol }}" class="form-control"></td>
            <td><input type="text" name="note" value="{{ $unit->note }}" class="form-control"></td>
            <td><input type="text" name="country" value="{{ $unit->country }}" class="form-control"></td>
            <td>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">⋮</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item delete-unit" href="#">Delete</a>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>



Update your main unit.blade.php:
@extends('layouts.app')

@section('content')
<div class="container">
    <ul class="nav nav-tabs" id="unitTabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="time-tab" data-toggle="tab" href="#time" role="tab" data-type="time">Time Units</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="currency-tab" data-toggle="tab" href="#currency" role="tab" data-type="currency">Currency Units</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="data-tab" data-toggle="tab" href="#data" role="tab" data-type="data">Data Units</a>
        </li>
    </ul>
    
    <div class="tab-content" id="unitTabsContent">
        <div class="tab-pane fade show active" id="time" role="tabpanel">
            <!-- Table will be loaded here -->
        </div>
        <div class="tab-pane fade" id="currency" role="tabpanel">
            <!-- Table will be loaded here -->
        </div>
        <div class="tab-pane fade" id="data" role="tabpanel">
            <!-- Table will be loaded here -->
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
$(document).ready(function() {
    // Load initial tab content
    loadTabContent('time');

    // Tab click event
    $('#unitTabs a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        var type = $(e.target).data('type');
        loadTabContent(type);
    });

    function loadTabContent(type) {
        $.ajax({
            url: '/units/table/' + type,
            method: 'GET',
            success: function(response) {
                $('#' + type).html(response);
            }
        });
    }

    // ... (rest of your JavaScript for handling table interactions)
});
</script>
@endsection



Update your UnitController:
class UnitController extends Controller
{
    public function index()
    {
        return view('unit');
    }

    public function getTable($type)
    {
        $units = Unit::where('type', $type)->get();
        $view = ($type === 'currency') ? 'tables.table_unit_currency' : 'tables.table_unit_time';
        return view($view, ['units' => $units, 'type' => $type]);
    }

    // ... other methods (update, store, destroy) remain the same
}



Add a new route in web.php:
Route::get('/units/table/{type}', [UnitController::class, 'getTable']);



Update your JavaScript functions to handle the different table structures:
// Add this to your existing JavaScript
function addNewRow(type) {
    var table = $('.unit-table[data-type="' + type + '"] tbody');
    var newOrdinal = table.find('tr').length + 1;
    var newRow = `
        <tr>
            <td><input type="text" name="ordinal" value="${newOrdinal}" class="form-control" readonly></td>
            <td><input type="text" name="name" class="form-control"></td>
            <td><input type="text" name="symbol" class="form-control"></td>
            <td><input type="text" name="note" class="form-control"></td>
            ${type === 'currency' ? '<td><input type="text" name="country" class="form-control"></td>' : ''}
            <td>
                <button class="btn btn-primary save-new-unit">Save</button>
                <button class="btn btn-danger cancel-new-unit">Cancel</button>
            </td>
        </tr>
    `;
    table.append(newRow);
}

// Modify your existing 'add-row' click handler
$(document).on('click', '.add-row', function() {
    var type = $(this).data('type');
    addNewRow(type);
});

// Modify your save-new-unit click handler to include the country field for currency
$(document).on('click', '.save-new-unit', function() {
    var row = $(this).closest('tr');
    var type = row.closest('.unit-table').data('type');
    var data = {
        type: type,
        name: row.find('input[name="name"]').val(),
        symbol: row.find('input[name="symbol"]').val(),
        note: row.find('input[name="note"]').val()
    };

    if (type === 'currency') {
        data.country = row.find('input[name="country"]').val();
    }

    // ... rest of your save logic
});

// ... rest of your JavaScript functions



This setup will:

Use separate blade files for each table type, reducing duplication.
Load the appropriate table via AJAX when a tab is clicked.
Handle the different structure of the currency table (with the extra 'country' column).
Dynamically add new rows based on the table type.
Remember to adjust your Unit model and database migration to include the 'country' field for currency units. Also, update your UnitRequest to include validation for the 'country' field when the type is 'currency'.

This approach provides a clean, maintainable structure while accommodating the different requirements for each unit type.

Try again with different context
Add context...
Avatar for honhatminh1510-cfizq
I mean only one blade file for 3 table, not 3 files for each one


I apologize for the misunderstanding. You're absolutely right - we can use a single blade file for all three tables, which is an even better approach for maintainability. Let's create a single table template that can handle all three types of units. Here's how we can do it:

Create a single blade file for the table:
Create resources/views/tables/table_unit.blade.php:

<button class="btn btn-primary add-row" data-type="{{ $type }}">Add New Row</button>
<table class="table unit-table" data-type="{{ $type }}">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Symbol</th>
            <th>Note</th>
            @if($type === 'currency')
                <th>Country</th>
            @endif
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($units as $index => $unit)
        <tr data-id="{{ $unit->id }}">
            <td><input type="text" name="ordinal" value="{{ $index + 1 }}" class="form-control" readonly></td>
            <td><input type="text" name="name" value="{{ $unit->name }}" class="form-control"></td>
            <td><input type="text" name="symbol" value="{{ $unit->symbol }}" class="form-control"></td>
            <td><input type="text" name="note" value="{{ $unit->note }}" class="form-control"></td>
            @if($type === 'currency')
                <td><input type="text" name="country" value="{{ $unit->country ?? '' }}" class="form-control"></td>
            @endif
            <td>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">⋮</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item delete-unit" href="#">Delete</a>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>



Update your main unit.blade.php:
@extends('layouts.app')

@section('content')
<div class="container">
    <ul class="nav nav-tabs" id="unitTabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="time-tab" data-toggle="tab" href="#time" role="tab" data-type="time">Time Units</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="currency-tab" data-toggle="tab" href="#currency" role="tab" data-type="currency">Currency Units</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="data-tab" data-toggle="tab" href="#data" role="tab" data-type="data">Data Units</a>
        </li>
    </ul>
    
    <div class="tab-content" id="unitTabsContent">
        <div class="tab-pane fade show active" id="time" role="tabpanel">
            <!-- Table will be loaded here -->
        </div>
        <div class="tab-pane fade" id="currency" role="tabpanel">
            <!-- Table will be loaded here -->
        </div>
        <div class="tab-pane fade" id="data" role="tabpanel">
            <!-- Table will be loaded here -->
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
$(document).ready(function() {
    // Load initial tab content
    loadTabContent('time');

    // Tab click event
    $('#unitTabs a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        var type = $(e.target).data('type');
        loadTabContent(type);
    });

    function loadTabContent(type) {
        $.ajax({
            url: '/units/table/' + type,
            method: 'GET',
            success: function(response) {
                $('#' + type).html(response);
            }
        });
    }

    // ... (rest of your JavaScript for handling table interactions)
});
</script>
@endsection



Update your UnitController:
class UnitController extends Controller
{
    public function index()
    {
        return view('unit');
    }

    public function getTable($type)
    {
        $units = Unit::where('type', $type)->get();
        return view('tables.table_unit', ['units' => $units, 'type' => $type]);
    }

    // ... other methods (update, store, destroy) remain the same
}



Update your JavaScript functions to handle the different table structures:
// Add this to your existing JavaScript
function addNewRow(type) {
    var table = $('.unit-table[data-type="' + type + '"] tbody');
    var newOrdinal = table.find('tr').length + 1;
    var newRow = `
        <tr>
            <td><input type="text" name="ordinal" value="${newOrdinal}" class="form-control" readonly></td>
            <td><input type="text" name="name" class="form-control"></td>
            <td><input type="text" name="symbol" class="form-control"></td>
            <td><input type="text" name="note" class="form-control"></td>
            ${type === 'currency' ? '<td><input type="text" name="country" class="form-control"></td>' : ''}
            <td>
                <button class="btn btn-primary save-new-unit">Save</button>
                <button class="btn btn-danger cancel-new-unit">Cancel</button>
            </td>
        </tr>
    `;
    table.append(newRow);
}

// Modify your existing 'add-row' click handler
$(document).on('click', '.add-row', function() {
    var type = $(this).data('type');
    addNewRow(type);
});

// Modify your save-new-unit click handler to include the country field for currency
$(document).on('click', '.save-new-unit', function() {
    var row = $(this).closest('tr');
    var type = row.closest('.unit-table').data('type');
    var data = {
        type: type,
        name: row.find('input[name="name"]').val(),
        symbol: row.find('input[name="symbol"]').val(),
        note: row.find('input[name="note"]').val()
    };

    if (type === 'currency') {
        data.country = row.find('input[name="country"]').val();
    }

    // ... rest of your save logic
});

// ... rest of your JavaScript functions



This setup will:

Use a single blade file (table_unit.blade.php) for all three types of units.
Conditionally render the 'Country' column only for currency units.
Load the appropriate table via AJAX when a tab is clicked, passing the correct type.
Handle the different structure of the currency table (with the extra 'country' column) in both the blade template and JavaScript.
Remember to adjust your Unit model and database migration to include the 'country' field for currency units. Also, update your UnitRequest to include validation for the 'country' field when the type is 'currency'.

This approach provides a clean, maintainable structure while accommodating the different requirements for each unit type, all within a single table template.



Try again with different context
Add context...

Certainly! Adding a reload button is a great way to allow users to refresh the data without reloading the entire page. Here's how you can implement this:

Update your table_unit.blade.php to include a reload button:
<div class="d-flex justify-content-between mb-3">
    <button class="btn btn-primary add-row" data-type="{{ $type }}">Add New Row</button>
    <button class="btn btn-secondary reload-table" data-type="{{ $type }}">
        <i class="fas fa-sync-alt"></i> Reload
    </button>
</div>
<table class="table unit-table" data-type="{{ $type }}">
    <!-- ... rest of your table code ... -->
</table>



Update your JavaScript in unit.blade.php to handle the reload functionality:
@section('scripts')
<script>
$(document).ready(function() {
    // Load initial tab content
    loadTabContent('time');

    // Tab click event
    $('#unitTabs a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        var type = $(e.target).data('type');
        loadTabContent(type);
    });

    // Reload button click event
    $(document).on('click', '.reload-table', function() {
        var type = $(this).data('type');
        loadTabContent(type);
    });

    function loadTabContent(type) {
        var tabPane = $('#' + type);
        // Show loading indicator
        tabPane.html('<div class="text-center"><i class="fas fa-spinner fa-spin fa-3x"></i></div>');
        
        $.ajax({
            url: '/units/table/' + type,
            method: 'GET',
            success: function(response) {
                tabPane.html(response);
            },
            error: function() {
                tabPane.html('<div class="alert alert-danger">Failed to load data. Please try again.</div>');
            }
        });
    }

    // ... (rest of your JavaScript for handling table interactions)
});
</script>
@endsection



Make sure you have Font Awesome or a similar icon library included in your project for the reload icon. If you're not using Font Awesome, you can replace <i class="fas fa-sync-alt"></i> with any other icon or just text.

Optionally, you can add a loading indicator to show that the table is being reloaded. This is already included in the loadTabContent function above.

If you want to prevent rapid successive reloads, you can add a simple debounce:

let reloadTimeout;
$(document).on('click', '.reload-table', function() {
    var type = $(this).data('type');
    clearTimeout(reloadTimeout);
    reloadTimeout = setTimeout(function() {
        loadTabContent(type);
    }, 300); // 300ms debounce
});



This implementation will:

Add a reload button next to the "Add New Row" button.
Reload only the specific table content when the reload button is clicked.
Show a loading indicator while the table is being reloaded.
Handle potential errors during reloading.
Remember to style your buttons and loading indicator as needed to match your application's design. Also, ensure that your server-side code in the getTable method of your UnitController is fetching the most up-to-date data each time it's called.



Try again with different context
Add context...
Avatar for honhatminh1510-cfizq

I understand. You want to have multiple new rows added before saving them all at once. Let's modify the code to accommodate this requirement. Here's how we can implement this:

Update the table_unit.blade.php to include a single save button:
<div class="d-flex justify-content-between mb-3">
    <div>
        <button class="btn btn-primary add-row" data-type="{{ $type }}">Add New Row</button>
        <button class="btn btn-success save-new-units" style="display: none;">Save New Units</button>
    </div>
    <button class="btn btn-secondary reload-table" data-type="{{ $type }}">
        <i class="fas fa-sync-alt"></i> Reload
    </button>
</div>
<table class="table unit-table" data-type="{{ $type }}">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Symbol</th>
            <th>Note</th>
            @if($type === 'currency')
                <th>Country</th>
            @endif
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($units as $index => $unit)
        <tr data-id="{{ $unit->id }}">
            <td><input type="text" name="ordinal" value="{{ $index + 1 }}" class="form-control" readonly></td>
            <td><input type="text" name="name" value="{{ $unit->name }}" class="form-control"></td>
            <td><input type="text" name="symbol" value="{{ $unit->symbol }}" class="form-control"></td>
            <td><input type="text" name="note" value="{{ $unit->note }}" class="form-control"></td>
            @if($type === 'currency')
                <td><input type="text" name="country" value="{{ $unit->country ?? '' }}" class="form-control"></td>
            @endif
            <td>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">⋮</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item delete-unit" href="#">Delete</a>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>



Update the JavaScript in unit.blade.php:
@section('scripts')
<script>
$(document).ready(function() {
    // ... (previous code remains the same)

    // Add new row
    $(document).on('click', '.add-row', function() {
        var type = $(this).data('type');
        addNewRow(type);
        $('.save-new-units').show();
    });

    function addNewRow(type) {
        var table = $('.unit-table[data-type="' + type + '"] tbody');
        var newOrdinal = table.find('tr').length + 1;
        var newRow = `
            <tr class="new-unit-row">
                <td><input type="text" name="ordinal" value="${newOrdinal}" class="form-control" readonly></td>
                <td><input type="text" name="name" class="form-control"></td>
                <td><input type="text" name="symbol" class="form-control"></td>
                <td><input type="text" name="note" class="form-control"></td>
                ${type === 'currency' ? '<td><input type="text" name="country" class="form-control"></td>' : ''}
                <td>
                    <button class="btn btn-danger remove-new-row">Remove</button>
                </td>
            </tr>
        `;
        table.append(newRow);
    }

    // Remove new row
    $(document).on('click', '.remove-new-row', function() {
        $(this).closest('tr').remove();
        if ($('.new-unit-row').length === 0) {
            $('.save-new-units').hide();
        }
    });

    // Save new units
    $(document).on('click', '.save-new-units', function() {
        var type = $('.unit-table').data('type');
        var newUnits = [];

        $('.new-unit-row').each(function() {
            var row = $(this);
            var unit = {
                type: type,
                name: row.find('input[name="name"]').val(),
                symbol: row.find('input[name="symbol"]').val(),
                note: row.find('input[name="note"]').val()
            };
            if (type === 'currency') {
                unit.country = row.find('input[name="country"]').val();
            }
            newUnits.push(unit);
        });

        if (newUnits.length > 0) {
            $.ajax({
                url: '/units/store-multiple',
                method: 'POST',
                data: { units: newUnits },
                success: function(response) {
                    if (response.success) {
                        alert('New units saved successfully!');
                        loadTabContent(type);
                    } else {
                        alert('Error saving units. Please try again.');
                    }
                },
                error: function() {
                    alert('Error saving units. Please try again.');
                }
            });
        }
    });

    // ... (rest of your JavaScript code)
});
</script>
@endsection



Update your UnitController to handle multiple unit insertions:
class UnitController extends Controller
{
    // ... (other methods remain the same)

    public function storeMultiple(Request $request)
    {
        $units = $request->input('units');
        
        DB::beginTransaction();
        try {
            foreach ($units as $unitData) {
                Unit::create($unitData);
            }
            DB::commit();
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }
}



Add a new route in web.php:
Route::post('/units/store-multiple', [UnitController::class, 'storeMultiple']);



This implementation will:

Allow adding multiple new rows before saving.
Show a "Save New Units" button when there are new rows to save.
Send all new units to the server in a single request.
Use a database transaction to ensure all units are saved or none are.
Reload the table after successful saving.
Remember to adjust the error handling and success messages as needed for your application. Also, consider adding client-side validation before sending the data to the server, and ensure your server-side validation in the UnitController is robust enough to handle multiple unit insertions.



Try again with different context
Add context...
