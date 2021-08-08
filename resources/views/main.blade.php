<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    
  body {
    background-color: darkblue;
  }
  table {
    background-color: white;
    width: 60%;
    height: 150px;
    padding: 25px;
    margin: 10% auto;
    border-radius: 10px ;
  
    
  }
.title {
  font-size: 25px;
margin: 0 auto;
white-space: nowrap;
text-align: left;
}

.first {
 
  margin: 20px 0;
  width: 100%;

}
.first-text {
  width: 100%;
  border-radius: 3px;
  border: 1px solid gainsboro;
  height: 40px;

}
.first-submit {
  width: 100%;
  font-weight: bold;
  border:  3px solid plum;
  border-radius: 3px;
  background-color: white;
  color: plum;
  height: 40px;
  
}


.second {
  width: 100%;
  font-weight: bold;
  border:  3px solid orange;
  border-radius: 3px;
  background-color: white;
  color: orange;
}
.third {
  width: 100%;
  font-weight: bold;
  border:  3px solid lightgreen;
  border-radius: 3px;
  background-color: white;
  color: lightgreen;
}
td {
  text-align: center;
  background-color: white;
  padding:  0 10px;

}
.error {
  color: white;
  text-align: center;
  list-style: none;
}



  </style>
</head>
<body>
<table>
<tr>
 <th class="title">
 Todo List
 </th>
</tr>
<form action='/add' method="post">
@csrf
<tr class="first"  >
    <td  class="text" colspan="3">
      <input type="text"  class="first-text" name="list" >
    </td>
    <td  clas>
      <input type="submit" value="追加" class="first-submit">
    </td>
</tr>
</form>
@if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
  <li class="error">
    {{$error}}
  </li>
  @endforeach
</ul>
@endif


<tr>
<th>作成日</th>
<th>タスク名</th>
<th>更新</th>
<th>削除</th>
</tr>
@if(isset($items))
@foreach($items as $item)
<tr>
  

    <td>{{$item->updated_at}}</td>
    <form action="{{ route('list.update', ['id' => $item->id]) }}" method="POST">
    <td><input type="text"  value="{{$item->list}}"name='list'></td>
    <td>
      @csrf
      <input type="submit" value="更新" class="second"  >
    </td>
  </form>   
  <td>
    <form action="{{ route('list.delete', ['id' => $item->id]) }}" method="POST">
      @csrf
    <input type="submit" value="削除" class="third" >
  </form>
  </td>
  
</tr>
@endforeach
@endif
</table>

</div>
  
</body>
</html>