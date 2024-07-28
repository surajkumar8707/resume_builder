<div class="resume-section-content">
    <h4 class=""><i class="fa fa-user"></i> Languages</h4>
    <p class="text-muted">If you master the specific language required by the postition, it is your bonus.</p>
    <div class="languages-container">
    </div>
    <div class="form-group">
        <input type="checkbox" name="dont_show_language" id="dont_show_language">
        <label for="dont_show_language">Don't show Language</label>
    </div>
    <button type="button" class="btn btn-link add_languages_button"><i class="fa fa-plus"></i>
        Add languages</button>
</div>

@push('scripts')
    <script>
        $(document).ready(function() {
            $('button.add_languages_button').click(function() {
                var main_language = $('.languages-container');
                var current_length_language = $('.languages-data').length;
                var isChecked_language = $("input#dont_show_language").is(':checked');
                var isCheckedClass_language = "";
                if (isChecked_language) {
                    isCheckedClass_language = "disabled"
                } else {
                    isCheckedClass_language = "";
                }
                var html_data_language = `
                <div class="languages-data mt-2">
                    <div class="row">
                        <div class="col-11">
                            <div class="p-2">
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="languages[` + current_length_language + `][name]">Language <span class="text-danger">*</span></label>
                                            <input type="text" name="languages[` + current_length_language + `][name]"
                                                id="languages[` + current_length_language + `][name]" class="form-control"
                                                placeholder="language" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="languages[` + current_length_language + `][level]">Level</label>
                                            <select name="languages[` + current_length_language +
                    `][level]" id="languages[` +
                    current_length_language + `][level]" class="level_language form-control" ` +
                    isCheckedClass_language + `>
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
                            <button type="button" class="btn btn-danger delete_languages_button"><i
                                    class="fa fa-trash"></i></button>
                        </div>
                    </div>
                </div>
            `;
                $(main_language).addClass('card');
                $(main_language).append(html_data_language);
            });

            $('body').on('click', 'button.delete_languages_button', function() {
                if (!confirm('Are you sure you want to delete')) {
                    return false;
                }
                $(this).closest('.languages-data').remove();
            });
            $('body').on('change', 'input#dont_show_language', function() {
                var isChecked_language = $(this).is(':checked');
                if (isChecked_language) {
                    $('.level_language').attr('disabled', 'disabled');
                } else {
                    $('.level_language').removeAttr('disabled');
                }
                console.log(isChecked_language);
            });
        });
    </script>
@endpush
