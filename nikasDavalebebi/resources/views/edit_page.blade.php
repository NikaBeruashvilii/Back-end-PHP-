@extends("layout")
    @section("body")

    <h1>Quizzes</h1>
    <form>

        <input type="text" placeholder="name">
        <!-- <ul>
        @foreach ($quizzes as $quiz)
            <li>
                <h2>{{ $quiz->name }}</h2>
                <p>{{ $quiz->description }}</p>
            </li>
        @endforeach
    </ul> -->
    </form>
    
    <button>Update</button>

    @endsection