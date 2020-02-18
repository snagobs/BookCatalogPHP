<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

<script>
$('.mytable').DataTable({
    lengthMenu : [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]]
});
</script>

<script>
    function confirmDelete() {
        if (confirm("Are you sure?")) {
            return true;
        } else {
            return false;
        }
    }
</script>

</body>
</html>