<?php require "views/partials/head.php"?>
<main class="my-20 flex justify-center ">
    <div class="printicket flex w-10/12 bg-green-200 border-b-4 border-green-500 rounded">
        <div class="card flex-1">
            <span class="flex text-2xl font-bold text-black sm:pr-12 mx-8 my-3"><?= $ticket['title']?></span>
            <div class="flex-1 flex-col mx-8 my-3">
                <span>Venue: </span>
                <span class="font-bold"><?= $ticket['name']?></span>
            </div>
            <div class="flex-1 flex-col mx-8 my-3">
                <span>Release date: </span>
                <span class="font-bold"><?= $ticket['date']?></span>
            </div>
            <div class="flex-1 flex-col mx-8 my-3">
                <span>Start Time: </span>
                <span class="font-bold"><?= $ticket['start_time']?></span>
            </div>
            <div class="flex-1 flex-col mx-8 my-3">
                <span>End Time: </span>
                <span class="font-bold"><?= $ticket['end_time']?></span>
            </div>
            <div class="flex-1 flex-col mx-8 my-3">
                <span>Number of tickets:</span>
                <span class="font-bold"><?= $ticket['total_tickets']?></span>
            </div>
            <div class="flex-1 flex-col mx-8 my-3">
                <span>Price: </span>
                <span class="font-bold">$<?= $ticket['price'] * $ticket['total_tickets']?></span>
            </div>
            <div class="flex-1 flex-col mx-8 my-3">
                <span>Customer: </span>
                <span class="font-bold"><?= $ticket['first_name'] .' '. $ticket['last_name']?></span>
            </div>
            <a href="/listtickets">
                <button class="bg-green-500 flex mx-8 my-3 hover:bg-green-400 text-white font-bold py-2 px-6 border-b-4 border-green-500 hover:border-green-500 rounded">Back</button>
            </a>
        </div>
        <div class="qrcode w-28 h-20 mx-5 my-3">
            <img src="data:image/png;base64,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" alt="">
        </div>
    </div>
</main>