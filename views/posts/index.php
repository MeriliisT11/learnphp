<?php include 'views/partials/header.php'; ?>

<main class="container">
<a href="/admin/posts/create" class="btn btn-primary">New Post</a>
    <table class="table">
        <thread>
            <th>ID</th>
            <th>Title</th>
            <th>Actions</th>
        </thread>
        <tbody>
            <?php foreach ($posts as $post): ?>
            <tr>
                <td><?=$post->id?></td>
                <td><?=$post->title?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <a class="btn btn-info">View</a>
                        <a class="btn btn-warning">Edit</a>
                        <a class="btn btn-danger" href="/admin/posts/delete?id=<?=$post->id?>">Delete</a>
                    </div>
                </td>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>
</main>

<?php include 'views/partials/footer.php'; ?>