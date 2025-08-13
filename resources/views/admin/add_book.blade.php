<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

@include('admin.css')
<style type="text/css">
.div_center
{
    text-align:center;
    margin:auto;
}
.title_deg{

    color:white;
    padding:  35px;
    font-size:40px;
    font-weight:bold;

}

label{

    display:inline-block;
    width:200px;


}
.div_pad
{
    padding:15px;
}

</style>

</head>
<body>
@include('admin.header');
<div class="d-flex align-items-stretch">


    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
          <div class="container-fluid"> 

          <div class="div_center"> 

          <h1 class="title_deg ">Add Books</h1>

          <form action="{{url('store_book')}}" method="Post" enctype="multipart/form-data">
            @csrf
<div class="div_pad">
    <label for="">Book Title</label>
    <input type="text" name="book_name">
</div>
<div  class="div_pad">
    <label for="">Author name</label>
    <input type="text" name="author_name">
</div>
<div  class="div_pad">
    <label for="">price</label>
    <input type="text" name="price">
</div>
<div  class="div_pad"> 
    <label for="">quantity</label>
    <input type="number" name="quantity">
</div>
<div  class="div_pad">
    <label for="">Book Image</label>
    <input type="file" name="image">
</div>
<div  class="div_pad">
    <label for="">description</label>

<textarea name="description" id=""></textarea>

</div>

<div  class="div_pad">
    <label for="">Category</label>

<select name="" id="" required>
    <option value="">Select Category</option>
    @foreach($data as $data)
    <option value="{{$data->cat_title}}">{{$data->cat_title}}</option>
</select>

</div>

<div  class="div_pad">
    <label for=""> author_image</label>
    <input type="file" name="author_image">
</div>
<div  class="div_pad">
    <label for="">Submit</label>
    <input type="submit"  name="Add Book" class="btn btn-info">
</div>
</form>

          </div>

</div>
</div>
</div>


</body>
</html>