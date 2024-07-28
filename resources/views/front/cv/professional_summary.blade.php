<div class="resume-section-content">
    <h4 class=""><i class="fa fa-user"></i> Professional Summary</h4>
    <p class="text-muted">Describe yourself in two to four short and vivid sentences to attract HR's interest on you!
        Describe your roles and experience, especially your greatest achievements, excellent skills, and professional
        qualities.</p>
    <div class="professional_summary_container">
        <div class="form-group text-end">
            <select class="col-4" name="" id="default_professional_summary">
                <option value="">-- Select Summary --</option>
                @foreach (getProfessionalSummary() as $key => $summary)
                    <option value="{{ $summary }}">
                        {{ $loop->iteration }}) {{ $summary }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="professional_summary">Description</label>
            <textarea name="professional_summary" id="professional_summary" cols="30" rows="10" class="form-control"></textarea>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $(document).ready(function() {
            $('select#default_professional_summary').change(function() {
                var default_valuue = $(this).val();
                var professional_summary_input = $("textarea#professional_summary");
                var professional_summary = professional_summary_input.val();

                var new_default_valuue = default_valuue + '\n' + professional_summary;
                professional_summary_input.val(new_default_valuue);
            });
        });
    </script>
@endpush
