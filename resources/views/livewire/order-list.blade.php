<div>
    <table>
        <thead>
            <tr>
                @foreach ($columns as $key => $value)
                    <th>{{ $value }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    @foreach ($columns as $key => $value)
                        <td>{{ $order[$key] }}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</div>