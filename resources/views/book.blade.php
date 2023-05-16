<x-layout>
    <div class="booking-container special-width shadow">
        <form method="POST" action="{{ route('users.store') }}">
            @csrf
            <div class="name-container">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Full Name">
{{--                <label for="last_name">Last Name</label>--}}
{{--                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">--}}
            </div>

            <div class="seat-container">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="100" id="seat_economy" name="seat">
                    <input type="hidden" name="seatName" value="Economy">
                    <label class="form-check-label" for="seat_economy">
                        Economy
                    </label>
                </div>
                <br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="300" id="seat-first" name="seat">
                    <input type="hidden" name="seatName" value="First-class">
                    <label class="form-check-label" for="seat-first">
                        First-class
                    </label>
                </div>
            </div>
            <div class="submit-container">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

    </div>
</x-layout>
