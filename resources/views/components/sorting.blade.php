<div>
    <select id="sortSearch" onchange="filterValue()" class="form-select">
        <option value="all" @if ($status == 'all') selected @endif> All </option>
        <option value="name" @if ($status == 'name') selected @endif> Name </option>
        <option value="created_at" @if ($status == 'created_at') selected @endif> Created Date </option>
    </select>

    <script>
        function filterValue(){
            let status = document.getElementById('sortSearch').value;
            if (status == 'all') {
                location.href = "/contacts";
            }else{
                location.href = "/contacts?status="+status;
            }

        }
    </script>

   

</div>