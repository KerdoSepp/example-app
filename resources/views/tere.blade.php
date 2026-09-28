<ul>
    @foreach ($authors as $author)
        <li>
            {{ $author->name }}
            <ul>
                <li><u>Reviews</u></li>
                @foreach ($author->reviews as $review)
                    <li>{{ $review->content }}</li>
                @endforeach
                @foreach ($author->books as $book)
                    <li>
                        {{ $book->title }}
                        <ul>
                            <li><u>Reviews</u></li>
                            @foreach ($book->reviews as $review)
                                <li>{{ $review->content }}</li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ul>
        </li>
    @endforeach
</ul>
