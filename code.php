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
