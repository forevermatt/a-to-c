# A-to-C: Learn Quickly #

This website was inspired by Kathy Sierra's keynote presentation at Fluent 
Conf. 2015. The goal is to provide a way to go through high-quality, very 
high-quantity examples in a short period of time. Exposure to 200-300 examples 
in a compressed period of time allows the brain to really recognize the 
patterns, and allows you to go from A (can't do something) directly to C 
(mastered) quickly.

Again, this website is to provide a simple way for people to go through such 
a set of examples. It is designed to allow the examples themselves to come 
from other repositories, assembled by the community.


## Structure of Example Data ##

Currently, the example data is structured as a folder (whose name consists of 
lowercase letters and hyphens, which will also be used as the URL slug) for a 
particular question the user will become able to answer, along with 
sequentially numbered PHP files (starting with "1.php"), each with data for a 
single example.


### Samples ###

*Question (some-question/data.php)*

    <?php
    return array(
        'text' => 'Is this a valid Haiku?',
        'options' => array(
            'no' => 'No',
            'yes' => 'Yes',
        ),
    );


*Example (some-question/1.php)*

    <?php
    $markdownContent = <<<'EOT'
    One two three
    Four Five
    Six Seven Eight Nine.
    EOT;
    return array(
        'type' => 'markdown',
        'content' => $markdownContent,
        'answer' => 'no',
    );
