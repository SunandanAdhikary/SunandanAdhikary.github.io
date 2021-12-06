---
title:  "Markdown examples"
mathjax: true
layout: post
categories: media
---
# 1. Trivial Examples


Some Sample text


## Heading Two (h2)
syntax:
```markdown
 ## Heading Two (h2)
```
and likewise...

### Heading Three (h3)

#### Heading Four (h4)

##### Heading Five (h5)

###### Heading Six (h6)


## Blockquotes

### Single line

syntax:
```markdown
 > My mom always said life was like a box of chocolates. You never know what you're gonna get.
```

> My mom always said life was like a box of chocolates. You never know what you're gonna get.

### Multiline

syntax:
```markdown
 > What do you get when you cross an insomniac, an unwilling agnostic and a dyslexic?
>
> You get someone who stays up all night torturing himself mentally over the question of whether or not there's a dog.
>
> – _Hal Incandenza_
```


> What do you get when you cross an insomniac, an unwilling agnostic and a dyslexic?
>
> You get someone who stays up all night torturing himself mentally over the question of whether or not there's a dog.
>
> – _Hal Incandenza_

## Horizontal Rule

syntax:
```markdown
---
```

---

## Table

syntax:
```markdown
| Title 1          | Title 2          | Title 3         | Title 4         |
|------------------|------------------|-----------------|-----------------|
| First entry      | Second entry     | Third entry     | Fourth entry    |
| Fifth entry      | Sixth entry      | Seventh entry   | Eight entry     |
| Ninth entry      | Tenth entry      | Eleventh entry  | Twelfth entry   |
| Thirteenth entry | Fourteenth entry | Fifteenth entry | Sixteenth entry |
```

| Title 1          | Title 2          | Title 3         | Title 4         |
|------------------|------------------|-----------------|-----------------|
| First entry      | Second entry     | Third entry     | Fourth entry    |
| Fifth entry      | Sixth entry      | Seventh entry   | Eight entry     |
| Ninth entry      | Tenth entry      | Eleventh entry  | Twelfth entry   |
| Thirteenth entry | Fourteenth entry | Fifteenth entry | Sixteenth entry |

## Code

Source code can be included by fencing the code with three backticks. Syntax highlighting works automatically when specifying the language after the backticks.
syntax:
````markdown
```javascript
function foo () {
    return "bar";
}
```
````

This would be rendered as:

```javascript
function foo () {
    return "bar";
}
```

## Lists

### Unordered

syntax:
````markdown
* First item
* Second item
* Third item
    * First nested item
    * Second nested item
```

* First item
* Second item
* Third item
    * First nested item
    * Second nested item

### Ordered

syntax:
````markdown
1. First item
2. Second item
3. Third item
    1. First nested item
    2. Second nested item
```

1. First item
2. Second item
3. Third item
    1. First nested item
    2. Second nested item

---


# 2. Advanced Examples


![Annapurna mountain range from Phalut](../assets/images/annapurna_4mPhalut.JPG)

syntax:
````markdown
![Annapurna mountain range from Phalut](../assets/images/annapurna_4mPhalut.JPG)
```

## MathJax

You can enable MathJax by setting `mathjax: true` on a page or globally in the `_config.yml`. Some examples:

[Euler's formula](https://en.wikipedia.org/wiki/Euler%27s_formula) relates the  complex exponential function to the trigonometric functions.

$$ e^{i\theta}=\cos(\theta)+i\sin(\theta) $$

The [Euler-Lagrange](https://en.wikipedia.org/wiki/Lagrangian_mechanics) differential equation is the fundamental equation of calculus of variations.

$$ \frac{\mathrm{d}}{\mathrm{d}t} \left ( \frac{\partial L}{\partial \dot{q}} \right ) = \frac{\partial L}{\partial q} $$

The [Schrödinger equation](https://en.wikipedia.org/wiki/Schr%C3%B6dinger_equation) describes how the quantum state of a quantum system changes with time.

$$ i\hbar\frac{\partial}{\partial t} \Psi(\mathbf{r},t) = \left [ \frac{-\hbar^2}{2\mu}\nabla^2 + V(\mathbf{r},t)\right ] \Psi(\mathbf{r},t) $$

syntax:
```latex
$$ e^{i\theta}=\cos(\theta)+i\sin(\theta) $$
```
## Code

Embed code by putting `{{ "{% highlight language " }}%}` `{{ "{% endhighlight " }}%}` blocks around it. Adding the parameter `linenos` will show source lines besides the code.

{% highlight c %}

static void asyncEnabled(Dict* args, void* vAdmin, String* txid, struct Allocator* requestAlloc)
{
    struct Admin* admin = Identity_check((struct Admin*) vAdmin);
    int64_t enabled = admin->asyncEnabled;
    Dict d = Dict_CONST(String_CONST("asyncEnabled"), Int_OBJ(enabled), NULL);
    Admin_sendMessage(&d, txid, admin);
}

{% endhighlight %}

syntax:
```
{% highlight c %}

static void asyncEnabled(Dict* args, void* vAdmin, String* txid, struct Allocator* requestAlloc)
{
    struct Admin* admin = Identity_check((struct Admin*) vAdmin);
    int64_t enabled = admin->asyncEnabled;
    Dict d = Dict_CONST(String_CONST("asyncEnabled"), Int_OBJ(enabled), NULL);
    Admin_sendMessage(&d, txid, admin);
}

{% endhighlight %}
```

## Gists

With the `jekyll-gist` plugin, which is preinstalled on Github Pages, you can embed gists simply by using the `gist` command:

<script src="https://gist.github.com/5555251.js?file=gist.md"></script>

## Images

Upload an image to the *assets* folder and embed it with `![title](/assets/name.jpg))`. Keep in mind that the path needs to be adjusted if Jekyll is run inside a subfolder.

A wrapper `div` with the class `large` can be used to increase the width of an image or iframe.

![rolling hills in dzukou valley](../assets/images/dzukou_hills.jpg)

[rolling hills in dzukou valley](../assets/images/dzukou_hills.jpg) by me

## Embedded content

You can also embed a lot of stuff, for example from YouTube, using the `embed.html` include.

{% include embed.html url="../assets/images/clouds_timelapseAt3500m.mp4" %}

syntax (you can replace the video link with any youtube video):
```markdown
{% include embed.html url="../assets/images/clouds_timelapseAt3500m.mp4" %}
```