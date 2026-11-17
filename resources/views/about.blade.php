<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<body>
    <h1>Revaldisthakt OLX</h1>
        <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat quae soluta, nihil impedit veritatis aut dolores neque veniam minima? Deserunt temporibus magni maxime nulla animi possimus reiciendis voluptatem consequuntur?</h2>
        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia molestiae delectus quibusdam hic dignissimos laudantium qui, beatae libero ipsa accusamus perferendis ut porro mollitia accusantium voluptatibus vero ducimus recusandae quam ullam tenetur! Consequatur accusantium dolore aut harum placeat quidem consequuntur quis, modi iusto nostrum necessitatibus, assumenda saepe repellat sint repudiandae!</h3>
        <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, eaque? Iure, laudantium veniam, necessitatibus sunt incidunt rerum nisi, fugiat dolor porro similique quidem aliquam.</h2>
        <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis laudantium cum quasi placeat perferendis fugit impedit. Distinctio, dolorem labore minus voluptatum velit necessitatibus nihil quis dicta assumenda magnam rerum veritatis quidem. Delectus earum neque quo voluptatem perferendis a ullam eius fugiat, eveniet sed recusandae, eaque, molestias distinctio?</h3>

    <h2>Daftar User</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Gender</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $index => $user)
                <tr>
                    <td>{{ $users->firstItem() + $index }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ ucfirst($user->gender ?? '-') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center" style="color: #777;">Tidak ada data user.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <!-- Link Paginasi bawaan Laravel -->
    <div class="pagination">
        {{ $users->links() }}
    </div>
</body>
</html>