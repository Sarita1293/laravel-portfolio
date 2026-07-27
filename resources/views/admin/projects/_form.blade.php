<div class="row">

    <div class="col-md-6">

        <label>Project Title</label>

        <input
            type="text"
            name="title"
            class="form-control"
            value="{{ old('title', $project->title ?? '') }}">

    </div>

    <div class="col-md-6">

        <label>Project Date</label>

        <input
            type="date"
            name="project_date"
            class="form-control"
            value="{{ old('project_date', $project->project_date ?? '') }}">

    </div>

    <div class="col-md-12">

        <label>Short Description</label>

        <textarea
            name="short_description"
            rows="3"
            class="form-control">{{ old('short_description', $project->short_description ?? '') }}</textarea>

    </div>

    <div class="col-md-12">

        <label>Description</label>

        <textarea
            name="description"
            rows="5"
            class="form-control">{{ old('description', $project->description ?? '') }}</textarea>

    </div>

    <div class="col-md-6">

        <label>Role</label>

        <input
            type="text"
            name="role"
            class="form-control"
            placeholder="Developer / Full Stack Developer"
            value="{{ old('role', $project->role ?? '') }}">

    </div>

    <div class="col-md-6">

        <label>GitHub URL</label>

        <input
            type="text"
            name="github_url"
            class="form-control"
            value="{{ old('github_url', $project->github_url ?? '') }}">

    </div>

    <div class="col-md-6">

        <label>Live URL</label>

        <input
            type="text"
            name="live_url"
            class="form-control"
            value="{{ old('live_url', $project->live_url ?? '') }}">

    </div>

    <div class="col-md-6">

        <label>Thumbnail Image</label>

        <input
            type="file"
            name="thumbnail_image"
            class="form-control">

        @if(!empty($project?->thumbnail_image))
            <br>
            <img src="{{ asset('storage/'.$project->thumbnail_image) }}"
                 width="120"
                 class="img-thumbnail">
        @endif

    </div>

    <div class="col-md-12">

        <label>Skills</label>

        <select
            name="skills[]"
            class="form-control"
            multiple>

            @foreach($skills as $skill)

                <option
                    value="{{ $skill->id }}"
                    {{ in_array(
                        $skill->id,
                        old(
                            'skills',
                            isset($project)
                                ? $project->skills->pluck('id')->toArray()
                                : []
                        )
                    ) ? 'selected' : '' }}>

                    {{ $skill->name }}

                </option>

            @endforeach

        </select>

    </div>

    <div class="col-md-3">

        <label>Display Order</label>

        <input
            type="number"
            name="display_order"
            class="form-control"
            value="{{ old('display_order', $project->display_order ?? '') }}">

    </div>

    <div class="col-md-3">

        <label>Status</label>

        <select
            name="status"
            class="form-control">

            <option
                value="1"
                {{ old('status', $project->status ?? '') == 1 ? 'selected' : '' }}>
                Active
            </option>

            <option
                value="0"
                {{ old('status', $project->status ?? '') == 0 ? 'selected' : '' }}>
                Inactive
            </option>

        </select>

    </div>

</div>