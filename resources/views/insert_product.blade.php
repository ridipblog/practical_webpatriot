<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Product</title>
</head>

<body>
    <div class="main_div">
        <form action="" id="form_id">
            @csrf
            <p>select Category</p>
            <select name="select_cate" id="select_cate">
                <option selected disabled>Select Category</option>
                @foreach ($categories as $category )
                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                @endforeach
            </select>
            <p>Enter Product Name</p>
            <input type="text" name="product_name" id="product_name">
            <button type="submit">Insert Product</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="{{ asset('js/insert_product.js') }}"></script>
</body>

</html>
