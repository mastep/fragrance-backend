<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/app.css" rel="stylesheet">
    <script src="/js/app.js"></script>
</head>
<body>
<div class="bg-white">
    <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
        <div class="flex justify-center">
            <div class="mb-3 xl:w-96">
                <label for="exampleFormControlInput1" class="form-label inline-block mb-2 text-gray-700"
                >Давай знакомиться...</label
                >
                <input
                    type="text"
                    class="
        form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
      "
                    v-model="userName"
                    placeholder="Как тебя зовут?"
                />

                <button
                    v-if="userName.length>0"
                    type="submit"
                    data-mdb-ripple="true"
                    data-mdb-ripple-color="light"
                    class="inline-block my-2 px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                >Далее</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
