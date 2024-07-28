<div class="resume-section-content">
    <h4 class=""><i class="fa fa-user"></i> Skills</h4>
    <p class="text-muted">Describe three to five skills that you have mastered, showing that you meet the requirements of
        the position. Make sure that the skills you list here are the key skills required by the position, such as
        software skills and language skills.</p>
    <div class="skills-container">
    </div>
    <div class="form-group">
        <input type="checkbox" name="dont_show_level" id="dont_show_level">
        <label for="dont_show_level">Don't show level</label>
    </div>
    <button type="button" class="btn btn-link add_skills_button"><i class="fa fa-plus"></i>
        Add Skills</button>
</div>

@push('scripts')
    <script>
        $(document).ready(function() {
            $('button.add_skills_button').click(function() {
                var main = $('.skills-container');
                var current_length = $('.skills-data').length;
                var isChecked = $("input#dont_show_level").is(':checked');
                var isCheckedClass = "";
                if (isChecked) {
                    isCheckedClass = "disabled"
                } else {
                    isCheckedClass = "";
                }
                var html_data = `
                <div class="skills-data mt-2">
                    <div class="row">
                        <div class="col-11">
                            <div class="p-2">
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="skills[` + current_length + `][name]">Skill</label>
                                            <input type="text" name="skills[` + current_length + `][name]"
                                                id="skills[` + current_length + `][name]" class="form-control"
                                                placeholder="Skill" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="skills[` + current_length + `][rating]">Level</label>
                                            <select name="skills[` + current_length + `][rating]" id="skills[` +
                    current_length + `][rating]" class="level_skill form-control" ` + isCheckedClass + `>
                                                <option value="0"> Novice </option>
                                                <option value="1"> Beginner </option>
                                                <option value="2"> Skillfull </option>
                                                <option value="3"> Experienced</option>
                                                <option value="4"> Expert</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-1 pt-4 mt-1">
                            <button type="button" class="btn btn-danger delete_skills_button"><i
                                    class="fa fa-trash"></i></button>
                        </div>
                    </div>
                </div>
            `;
                $(main).addClass('card');
                $(main).append(html_data);
            });

            $('body').on('click', 'button.delete_skills_button', function() {
                if (!confirm('Are you sure you want to delete')) {
                    return false;
                }
                $(this).closest('.skills-data').remove();
            });
            $('body').on('change', 'input#dont_show_level', function() {
                var isChecked = $(this).is(':checked');
                if (isChecked) {
                    $('.level_skill').attr('disabled', 'disabled');
                } else {
                    $('.level_skill').removeAttr('disabled');
                }
                console.log(isChecked);
            });
        });
    </script>
@endpush
