<div class="resume-section-content">
    <h4 class=""><i class="fa fa-user"></i> Work Experience</h4>
    <p class="text-muted">Describe your relevant experience. List your achievements with numbers and facts (Achieved X by
        doing Y, measured by Z).</p>
    <div class="work-experience-container">
    </div>
    <button type="button" class="btn btn-link add_work_experience_button"><i class="fa fa-plus"></i>
        Add work
        experience</button>
</div>

@push('scripts')
    <script>
        $(document).ready(function() {
            $('button.add_work_experience_button').click(function() {
                var main = $('.work-experience-container');
                var current_length = $('.work-experience-data').length;
                var html_data = `
                <div class="work-experience-data mb-3">
                    <div class="row">
                        <div class="col-11">
                            <div class="card p-2">
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="work_experience[` + current_length + `][company_name]">Company Name</label>
                                            <input type="text" name="work_experience[` + current_length + `][company_name]"
                                                id="work_experience[` + current_length + `][company_name]" class="form-control"
                                                placeholder="City" required value="Lucknow">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="work_experience[` + current_length + `][position]">Job Title</label>
                                            <input type="text" name="work_experience[` + current_length + `][position]"
                                                id="work_experience[` + current_length + `][position]" class="form-control"
                                                placeholder="City" required value="Lucknow">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="work_experience[` + current_length + `][start_date]">Start Date</label>
                                            <input type="month" name="work_experience[` + current_length + `][start_date]"
                                                id="work_experience[` + current_length + `][start_date]" class="form-control"
                                                placeholder="start_date" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="work_experience[` + current_length + `][end_date]">End Date</label>
                                            <input type="month" name="work_experience[` + current_length + `][end_date]"
                                                id="work_experience[` + current_length + `][end_date]" class="form-control"
                                                placeholder="end_date">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <input type="checkbox" name="work_experience[` + current_length + `][currently_work]"
                                        id="work_experience[` + current_length + `][currently_work]" value="present">
                                    <label for="work_experience[` + current_length + `][currently_work]">I currently work
                                        here</label>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="work_experience[` + current_length + `][country]">Country</label>
                                            <input type="text" name="work_experience[` + current_length + `][country]"
                                                id="work_experience[` + current_length + `][country]" class="form-control"
                                                placeholder="country" required value="India">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="work_experience[` + current_length + `][state]">State</label>
                                            <input type="text" name="work_experience[` + current_length + `][state]"
                                                id="work_experience[` + current_length + `][state]" class="form-control"
                                                placeholder="state" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="work_experience[` + current_length + `][city]">City</label>
                                            <input type="text" name="work_experience[` + current_length + `][city]"
                                                id="work_experience[` + current_length + `][city]" class="form-control"
                                                placeholder="city">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-1">
                            <button type="button" class="btn btn-danger delete_work_experience_button"><i
                                    class="fa fa-trash"></i></button>
                        </div>
                    </div>
                </div>
            `;
                $(main).append(html_data);
            });

            $('body').on('click', 'button.delete_work_experience_button', function() {
                if (!confirm('Are you sure you want to delete')) {
                    return false;
                }
                $(this).closest('.work-experience-data').remove();
            });
        });
    </script>
@endpush
