<div class="mb-3">
    <label class="form-label">Table Number</label>
    <input type="text" name="Table_naumber" class="form-control" value="{{ old('Table_naumber', $table->Table_naumber ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">Status</label>
    <input type="text" name="status" class="form-control" value="{{ old('status', $table->status ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">Size</label>
    <input type="text" name="Size" class="form-control" value="{{ old('Size', $table->Size ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">Restaurant ID</label>
    <input type="text" name="resturant_id" class="form-control" value="{{ old('resturant_id', $table->resturant_id ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">Admin ID</label>
    <input type="text" name="admin_id" class="form-control" value="{{ old('admin_id', $table->admin_id ?? '') }}">
</div>

<button type="submit" class="btn btn-success">Save</button>
