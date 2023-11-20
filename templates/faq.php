<?php
/*Template Name: Faq Page */
$faq_information1 = get_field('faq_information')['section1'];
$faq_information2 = get_field('faq_information')['section2'];

$faq_information_sec1 = null !== $faq_information1 ? $faq_information1 : 'empty';
$faq_information_sec2 = null !== $faq_information2 ? $faq_information2 : 'empty';




?>
<?php get_header(); ?>

<main class="faq-page">
    <section>
        <div></div>
        <div>
            <h1></h1>
            <p></p>
            <div></div>
        </div>
    </section>
    <section>
        <h2></h2>
        <p></p>
    </section>
    <section>

    </section>
</main>
<?php get_footer(); ?>