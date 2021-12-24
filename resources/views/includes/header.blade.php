<form action="" method="post">
@csrf
  <div class="flex flex-row p-5">
    <div class="w-6/12">
      <input type="text" name="address" id="address" class="p-2 w-full bg-gray-200 rounded-md" autocomplete="off" placeholder="العنوان">
    </div>
    <div class="w-6/12">
      <select name="category" id="" class="p-2 mr-5 bg-gray-200 w-full rounded-md">
        <option value="">حدد التصنيف</option>
      </select>
    </div>
    <div class="mr-8">
      <button class="py-2 px-6 bg-gray-500 hover:bg-gray-400 text-white mr-5 rounded-md" type="submit">بحث</button>
    </div>
  </div>
</form>