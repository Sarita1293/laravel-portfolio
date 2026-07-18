<div class="row">

    <div class="col-md-12 mb-3">
         <label>Skill Category</label>
            <select name="skill_category_id" class="form-control">
                
                <option value="">Select Category</option>

                @foreach($skillCategories as $category)

                    <option value="{{ $category->id }}"
                        {{ old('skill_category_id', $skill->skill_category_id ?? '') == $category->id ? 'selected' : '' }}>

                        {{ $category->name }}

                    </option>

                @endforeach

            </select>
    </div>

    <div class="col-md-6 mb-3">
        <label>skill Name</label>

        <input
            type="text"
            name="name"
            class="form-control"
            value="{{ old('name', $skill->name ?? '') }}">
    </div>

    <div class="col-md-6 mb-3">
        <label>Percentage</label>

        <input type="text"
            name="percentage"
            class="form-control"
            value="{{ old('percentage', $skill->percentage ?? '') }}" >
    </div>

    <div class="col-md-3">

        <label>Display Order</label>

        <input
            type="number"
            name="display_order"
            value="{{ old('display_order', $skill->display_order ?? '') }}"
            class="form-control">

    </div>

    <div class="col-md-3">
        <label>Status</label>

        <select
            name="status"
            class="form-control">

            <option value="1"
                {{ old('status', $skill->status ?? '') == 1 ? 'selected' : '' }}>
                Active
            </option>

            <option value="0"
                {{ old('status', $skill->status ?? '') == 0 ? 'selected' : '' }}>
                Inactive
            </option>

        </select>
    </div>

</div>