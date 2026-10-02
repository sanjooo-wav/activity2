<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<section class="page-intro compact">
    <p class="kicker">Account directory</p>
    <h1>User Accounts</h1>
    <p>Temporary staff records for this first version.</p>
</section>
<section class="table-wrap" aria-label="User account records">
    <table>
        <thead><tr><th scope="col">Username</th><th scope="col">Full name</th><th scope="col">Role</th></tr></thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr><td><?= esc($user['username']) ?></td><td><?= esc($user['full_name']) ?></td><td><?= esc($user['role']) ?></td></tr>
        <?php endforeach ?>
        </tbody>
    </table>
</section>
<?= $this->endSection() ?>
