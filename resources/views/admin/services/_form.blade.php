<div class="row">

    <div class="col-md-12 mb-3">
        <label>Service Icon</label>

        <input
            type="text"
            name="icon"
            class="form-control"
            value="{{ old('icon', $service->icon ?? '') }}"
            placeholder="Example: fa-solid fa-code">

        <small class="text-muted">
            Enter Font Awesome icon class. Example:
            <code>fa-solid fa-code</code>
        </small>
    </div>

    <div class="col-md-12 mb-3">
        <label>Service Title</label>

        <input
            type="text"
            name="title"
            class="form-control"
            value="{{ old('title', $service->title ?? '') }}">
    </div>

    <div class="col-md-12 mb-3">
        <label>Description</label>

        <textarea
            rows="5"
            name="description"
            class="form-control">{{ old('description', $service->description ?? '') }}</textarea>
    </div>

    <div class="col-md-3">

        <label>Display Order</label>

        <input
            type="number"
            name="display_order"
            value="{{ old('display_order', $service->display_order ?? '') }}"
            class="form-control">

    </div>

    <div class="col-md-3">
        <label>Status</label>

        <select
            name="status"
            class="form-control">

            <option value="1"
                {{ old('status', $service->status ?? '') == 1 ? 'selected' : '' }}>
                Active
            </option>

            <option value="0"
                {{ old('status', $service->status ?? '') == 0 ? 'selected' : '' }}>
                Inactive
            </option>

        </select>
    </div>

</div>