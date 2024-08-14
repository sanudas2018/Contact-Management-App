<div>
    <select name="" id="sorting" onchange="filterStatus()">
        <option value="all"
            @if ($status=='all' ) selected @endif>All</option>
        <option value="name" @if ($status=='name' ) selected @endif>Name</option>
        <option value="created_at" @if ($status=='created_at' ) selected @endif>Create Date</option>
    </select>

    <script>
        function filterStatus() {
            let sorting = document.getElementById('sorting').value;
            if (sorting == 'all') {
                // location.href = "/tasks";
                // এটা কে আবার Route দিয়ে করা যাবে 
                location.href = "{{url('components.index')}}";
            } else {
                location.href = "/contacts?sorting=" + sorting;
            }
        }
    </script>

</div>