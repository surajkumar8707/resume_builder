<div class="resume-section-content">
    <h4 class=""><i class="fa fa-user"></i> Education</h4>
    <p class="text-muted">Rich educational experiences shown in your resume indicate your knowledge and educational
        background, and the potential value that you can bring to the company.</p>
    <div class="education-container">
    </div>
    <button type="button" class="btn btn-link add_education_button"><i class="fa fa-plus"></i>Add
        Education</button>
</div>



@push('scripts')
    <script>
        $(document).ready(function() {
            $('button.add_education_button').click(function() {
                var main = $('.education-container');
                var current_length = $('.education-data').length;
                var html_data = `
                <div class="education-data mb-3">
                    <div class="row">
                        <div class="col-11">
                            <div class="card p-2">

                                <div class="form-group mb-4">
                                    <label for="education[` + current_length + `][school_name]">School Name</label>
                                    <input type="text" name="education[` + current_length + `][school_name]"
                                        id="education[` + current_length + `][school_name]" class="form-control" placeholder="School name" required>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="education[` + current_length + `][degree]">Degree</label>
                                            <input type="text" name="education[` + current_length + `][degree]"
                                                id="education[` + current_length + `][degree]" class="form-control"
                                                placeholder="Degree" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="education[` + current_length + `][field_of_study]">Field of study</label>
                                            <input type="text" name="education[` + current_length + `][field_of_study]"
                                                id="education[` + current_length + `][field_of_study]" class="form-control"
                                                placeholder="Field of study" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="education[` + current_length + `][start_date]">Start Date</label>
                                            <input type="month" name="education[` + current_length + `][start_date]"
                                                id="education[` + current_length + `][start_date]" class="form-control"
                                                placeholder="start_date" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="education[` + current_length + `][end_date]">End Date</label>
                                            <input type="month" name="education[` + current_length + `][end_date]"
                                                id="education[` + current_length + `][end_date]" class="form-control"
                                                placeholder="end_date">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <input type="checkbox" name="education[` + current_length + `][currently_study]"
                                        id="education[` + current_length + `][currently_study]" value="present">
                                    <label for="education[` + current_length + `][currently_study]">I currently Study here</label>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="education[` + current_length + `][country]">Country</label>
                                            <input type="text" name="education[` + current_length + `][country]"
                                                id="education[` + current_length + `][country]" class="form-control"
                                                placeholder="country" required value="India">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="education[` + current_length + `][state]">State</label>
                                            <input type="text" name="education[` + current_length + `][state]"
                                                id="education[` + current_length + `][state]" class="form-control"
                                                placeholder="state" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="education[` + current_length + `][city]">City</label>
                                            <input type="text" name="education[` + current_length + `][city]"
                                                id="education[` + current_length + `][city]" class="form-control"
                                                placeholder="city">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-1 pt-2">
                            <button type="button" class="btn btn-danger delete_education_button"><i
                                    class="fa fa-trash"></i></button>
                        </div>
                    </div>
                </div>
            `;
                $(main).append(html_data);
            });

            $('body').on('click', 'button.delete_education_button', function() {
                if (!confirm('Are you sure you want to delete')) {
                    return false;
                }
                $(this).closest('.education-data').remove();
            });
        });
    </script>
@endpush
