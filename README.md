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
sequentially numbered JSON files (starting with "1.json"), each with data for a 
single example.


### Samples ###

*Question (some-question/data.json)*
```
{
    "text": "Is this a valid Haiku?",
    "options": {
        "no": "No",
        "yes": "Yes"
    )
}
```


*Example 1  (some-question/1.json)*  
```
{
    "type": "markdown",
    "answer": "no"
}
```

*Example 1 content file (some-question/1.md)*  
```
One two three  
Four Five  
Six Seven Eight Nine.
```

*Example 2* (some-question/2.json)*  
```
{
    "type": "image",
    "answer": "no"
}
```

*Example 2 (some-question/2.jpg)* (an example image in the same folder)
