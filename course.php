<!-- course.php -->
<?php
session_start();
include 'db.php';

if (!isset($_GET['id'])) {
    header('Location: index.php');
    exit();
}

$id = $_GET['id'];

$query = "SELECT * FROM courses WHERE id = :id";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$course = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$course) {
    header('Location: index.php');
    exit();
}
?>

<?php include 'header.php'; ?>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <!-- <img src="<?= $course['image'] ?>" class="img-fluid mb-4" alt="<?= $course['title'] ?>"> -->
            <div class="embed-responsive embed-responsive-16by9 mt-4">
            <iframe class="embed-responsive-item" src="<?= $course['video_url']??"https://www.youtube.com/embed/8k-kK3tsJFY?si=EmouPCWSoOSly0vK" ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <!-- <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/YOUR_VIDEO_ID_HERE" allowfullscreen></iframe> -->
        </div>
        </div>
        <div class="col-md-6">
            <h2><?= $course['title'] ?></h2>
            <p class="text-muted mb-3">By <?= $course['instructor'] ?></p>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <span class="mr-2"><?= $course['rating'] ?> ⭐</span>
                    <span><?= $course['views'] ?> views</span>
                </div>
                <div class="d-flex align-items-center">
                    <span class="text-danger mr-2">Rs<?= $course['price'] ?></span>
                    <?php if ($course['original_price'] > $course['price']): ?>
                        <span class="course-price discounted-price">Rs<?= $course['original_price'] ?></span>
                    <?php endif; ?>
                </div>
            </div>
            <p class="mb-3"><?= $course['description'] ?></p>
            <div class="mb-3">
                <span class="mr-2"><strong>Lessons:</strong> <?= $course['lessons'] ?></span>
                <span><strong>Duration:</strong> <?= $course['duration'] ?> Hours</span>
            </div>
            <a href="#" class="btn btn-primary">Enroll Now</a>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
