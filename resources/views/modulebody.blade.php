<select class="span3" id="category_select">
    <option value="0">All Categories</option>
    @foreach($student_categories_list as $student_category)
        <option value="{{ $student_category->cat_id }}">{{ $student_category->category }}</option>
    @endforeach
</select>
<select class="span2" id="year_select">
    <option value="0">All Years</option>
    <option>2020</option>
    <option>2021</option>
    <option>2022</option>
    <option>2023</option>
    <option>2024</option>
    <option>2025</option>
    <option>2026</option>
    <option>2027</option>
    <option>2028</option>
    <option>2029</option>
    <option>2030</option>
</select>
    <button style="margin-bottom:10px" id="refresh" class="btn btn-warning">Refresh</button>