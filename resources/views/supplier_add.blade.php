<div>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
     <h1> ADD SUPPLIER </h1>
     <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="supplier_name" value="{{old('supplier_name')}}" >
        <input type="text" name="contact_no"   value="{{old('contact_no')}}">
        <button> ADD</button>
</form>
</form>
</div>
