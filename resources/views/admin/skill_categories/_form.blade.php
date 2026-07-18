<div class="row">

    <div class="col-md-12 mb-3">
        <label>Name</label>

        <input
            type="text"
            name="name"
            class="form-control"
            value="{{ old('name', $skill_category->name ?? '') }}">
    </div>

    <div class="col-md-12 mb-3">
        <label>Icon</label>

        <input
            type="text"
            name="icon"
            class="form-control"
            value="{{ old('icon', $skill_category->icon ?? '') }}"
            placeholder="Example: fa-solid fa-code">

        <small class="text-muted">
            Enter Font Awesome icon class. Example:
            <code>fa-solid fa-code</code>
        </small>
    </div>

    <div class="col-md-3">

        <label>Display Order</label>

        <input
            type="number"
            name="display_order"
            value="{{ old('display_order', $skill_category->display_order ?? '') }}"
            class="form-control">

    </div>

    <div class="col-md-3">
        <label>Status</label>

        <select
            name="status"
            class="form-control">

            <option value="1"
                {{ old('status', $skill_category->status ?? '') == 1 ? 'selected' : '' }}>
                Active
            </option>

            <option value="0"
                {{ old('status', $skill_category->status ?? '') == 0 ? 'selected' : '' }}>
                Inactive
            </option>

        </select>
    </div>

</div>