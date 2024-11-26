<div>
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
    <form action="" method="post">
        @csrf
        <input type="text" name="name" id="id_name" value="{{$item->name}}">
        <input type="number" name="rate" id="id_rate"  value="{{$item->rate}}">
        <button> Edit Item </button>
    </form>
</div>
