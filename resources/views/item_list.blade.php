<div>
    <a href="item_add" >Add Item </a>
    @if($message) 
        <p>{{ $message }}</p>
    @endif
    <table border='1'>
        <tr>
            <td> Name</td>
            <td>Rate</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        @foreach($items as $item)
        <tr>
            <td> {{$item->name}}</td>
            <td>{{$item->rate}}</td>
            <!-- <td>{{$item->created_datetiem}}</td>
            <td>{{$item->updated_datetime}}</td> -->
            <td><a href="item_edit/{{$item->id}}">Edit</a></td>
            <td><a href="item_delete/{{$item->id}}">Delete</a></td>
        </tr>
        @endforeach
</table>
</div>
