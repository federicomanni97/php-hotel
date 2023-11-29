<?php 
include __DIR__ . '/partials/header.php';
if (isset($_GET['available'])) {
    $available = $_GET['available'];
    $hotels = array_filter($hotels, fn($item) => $available === 'all' || $item['parking'] == (bool)'available');
}
// if (isset($_GET['hotelVote'])) {
//     $available = $_GET['hotelVote'];
//     $hotels = array_filter($hotels, fn($item) => $available === 'all' || $item['parking'] == (bool)'available');
// }
?>

<main>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">Hotel Name</th>
            <th scope="col">Hotel Description</th>
            <th scope="col">Parking</th>
            <th scope="col">Vote</th>
            <th scope="col">Distance To Center</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($hotels as $hotelList) { ?>
        <tr>
            <?php foreach($hotelList as $element) { ?>
                <td> <?php echo $element ?> </td>
            <?php } ?>
        </tr>
           <?php } ?>
    </tbody>
    </table>
</main>

<?php
include __DIR__ .'/partials/footer.php';
?>