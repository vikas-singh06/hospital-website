<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    
    .links a {
        font-size: 1.5rem;
        color: black;
    }

    .fa-arrow-left-long {
        margin: 0 1rem;
    }

   
</style>

<body>
    <?php include('./header.html') ?>

    <!-- here start body  -->
    <div class="container-fluid parralax2 ">
        <div class="row p-5 d-flex align-items-center justify-content-center">
            <div class="col w-auto">
                <h1>FAQ</h1>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
            </div>
            <div class="links ml-auto ml-sm-0 ml-md-0 w-auto">
                <a href="./index.php">Home</a><i class="fa-solid fa-arrow-left-long fa-flip-horizontal"></i><a
                    href="./faq.php">FAQ</a>
            </div>
        </div>
    </div>
    
        <header class="text-center my-5">
        <h1>Frequently Asked Questions</h1>
    </header>

    <div class="faq-container">
        <div class="faq-item">
            <div class="question">What is Lorem Ipsum?</div>
            <div class="answer">Lorem Ipsum is simply dummy text of the printing and typesetting industry
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam vitae ducimus voluptatibus vero quibusdam blanditiis eaque aperiam voluptatum? Dolorem eum, officiis mollitia in vitae deserunt voluptatem repellendus saepe praesentium laborum?.</div>
        </div>

        <div class="faq-item">
            <div class="question">Why do we use it?</div>
            <div class="answer">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout
            Lorem Ipsum is simply dummy text of the printing and typesetting industry
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam vitae ducimus voluptatibus vero quibusdam blanditiis eaque aperiam voluptatum? Dolorem eum, officiis mollitia in vitae deserunt voluptatem repellendus saepe praesentium laborum?..</div>
        </div>

        <div class="faq-item">
            <div class="question">Where does it come from?</div>
            <div class="answer">Lorem Ipsum is simply dummy text of the printing and typesetting industry
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam vitae ducimus voluptatibus vero quibusdam blanditiis eaque aperiam voluptatum? Dolorem eum, officiis mollitia in vitae deserunt voluptatem repellendus saepe praesentium laborum?.
                Contrary to popular belief, Lorem Ipsum is not simply random text.</div>
        </div>
    </div>

    <script>
        const questions = document.querySelectorAll(".question");

        questions.forEach((question) => {
            question.addEventListener("click", () => {
                question.classList.toggle("active");
               
            });
        });
    </script>
    

    <?php include('./footer.php') ?>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>