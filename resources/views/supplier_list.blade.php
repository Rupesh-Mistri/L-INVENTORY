<div>
    <!-- He who is contented is rich. - Laozi -->
     <a href="supplier_add">Add supplier </a>
     <h1>Supplier List<h1>
        @if(session('message'))
        {{session('message')}}
        @endif
        <table border="1">
            <tr>
                <td>Supplier Name</td>
                <td>Contact No.</td>
               
            </tr>
        </table>

</div>
