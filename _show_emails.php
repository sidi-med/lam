<?php
    include_once 'connexion.php';
    $sql = "SELECT * FROM emails";
    $req = $conn->query($sql);
    $emails = $req->fetchAll(PDO::FETCH_ASSOC);
?>

<?php foreach($emails as $email): ?>
<div class="card" style="height: <?php echo floor(strlen($email['message'])/1.2).'px' ?>; margin: 10px; color: #fff">
    <div class="card-header text-center">
        <h4>
            <?= $email['prenom'].' '.$email['nom']; ?>
        </h4>
        <br>
        <small>
            <?= $email['email']; ?>
        </small>
    </div>
    <div class="card-body">
       <p style="margin-bottom: 5px;">
           <?= $email['message']; ?>
       </p>
    </div>
</div>
<?php endforeach; ?>