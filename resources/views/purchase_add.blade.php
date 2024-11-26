<div>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
    
    <form action="" method="post">
    <input type="text" name="invoice_no" >
    <input type="date" name="invoice_date">
    <select name="supplier" >
        @foreach($supplier as $sup)
        <option value="{{$sup->id}}">{{$sup->supplier_name}} </option>
        @endforeach
    </select>

</form>
</div>
