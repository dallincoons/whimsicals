<fieldset>

    <input type="radio" v-model="dateType" value="single" name="dateType">
    One-day Event
    <input type="radio" v-model="dateType" value="multi" name="dateType">
    Multiple Day Event
</fieldset>

<label>Start Date</label>
<fieldset class="form-group">
    <select name="start_month">
        <option value="1">January</option>
        <option value="2">February</option>
        <option value="3">March</option>
        <option value="4">April</option>
        <option value="5">May</option>
        <option value="6">June</option>
        <option value="7">July</option>
        <option value="8">August</option>
        <option value="9">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
    </select>
    <select name="start_day">
        @foreach(range(1, 31) as $day)
            <option>{{$day}}</option>
        @endforeach
    </select>
    <select name="start_year">
        <option>{{$now->year}}</option>
        <option>{{$now->copy()->addYear()->year}}</option>
    </select>
</fieldset>

<div v-show="dateType === 'multi'">

    <label>End Date</label>
    <fieldset class="form-group">
        <select name="end_month">
            <option value="1">January</option>
            <option value="2">February</option>
            <option value="3">March</option>
            <option value="4">April</option>
            <option value="5">May</option>
            <option value="6">June</option>
            <option value="7">July</option>
            <option value="8">August</option>
            <option value="9">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
        </select>
        <select name="end_day">
            @foreach(range(1, 31) as $day)
                <option>{{$day}}</option>
            @endforeach
        </select>
        <select name="end_year">
            <option>{{$now->year}}</option>
            <option>{{$now->copy()->addYear()->year}}</option>
        </select>
    </fieldset>
</div>