
<div class="jumbotron">
    <h2>
        <a href="#" data-toggle="popover" title="Definition" data-placement="bottom" data-content="PHP or hypertext preprocessor is defined as an HTML-embedded scripting language that is used to write web pages."><strong>PHP</strong></a> 
        vs 
        <a href="#" data-toggle="popover" title="Definition" data-placement="bottom" data-content="ASP.NET is an open source server-side Web application framework designed for Web development to produce dynamic Web pages."><strong>ASP.NET</strong>? </a>
        What you should really be comparing instead...
    </h2>
    Copyright:
    <a href="https://www.linkedin.com/pulse/20141114182637-12880086-php-vs-asp-net-what-you-should-really-be-comparing-instead">
    https://www.linkedin.com/pulse/20141114182637-12880086-PHP-vs-asp-net-what-you-should-really-be-comparing-instead
    </a>
</div>
<blockquote class="blockquote">
    <p>
        I have been dealing with the <strong>PHP</strong> vs <strong>ASP.NET</strong> comparisons for the past few years and have gotten frustrated on more than one occasion with either clients or other software engineers arguing one side or the other without knowing some basic facts. Here’s my 2 cents on the debate.
    </p>
    <p>
        First off, I think it is very important to you as a reader to understand my background. 8 years of my career was dedicated to game development for the Xbox and PS3. Games for these consoles are programmed in C++ and using Visual Studio. This is important because someone with that background is going to gravitate to <strong>ASP.NET</strong> before <strong>PHP</strong>.
    </p>
    <p>
        The last 3 years I have been working on a number of different web projects and apps. This includes most of them built with <strong>ASP.NET</strong>. However, I worked on one large <strong>PHP</strong> project where I was the lead and primary engineer and several WordPress websites with custom themes. During that time, I built an entire RESTful API using Laravel that I continue to support to this day.
    </p>
    <p>
        I am fully aware what you are thinking right now. Just because I’ve done ONE <strong>PHP</strong> big project, doesn’t make me an expert. You are correct, I am not a <strong>PHP</strong> expert. However, the arguments I make in this post would not change with experience level.
    </p>
    <p>
        For the record, I am NOT pro <strong>ASP.NET</strong> or pro <strong>PHP</strong>. There are some situations where <strong>PHP</strong> is the best tool for the job, and there are other cases where <strong>ASP.NET</strong> is the best. I have actually fought for the use of <strong>PHP</strong> in a lot of projects.
    </p>
    <p>


    <button type="button" class="btn btn-info" id="show_more_btn" data-toggle="collapse" data-target="#demo_collapse">See more...</button>
    <div id="demo_collapse" class="collapse">
        <h3>THIS POST IS BIAS</h3>
        You can read so many articles that give a fair shake down of <strong>PHP</strong> and <strong>ASP.NET</strong>. This post isn't meant to do that. This post is to point out what <strong>PHP</strong> enthusiast are conveniently leaving out of their posts on why <strong>PHP</strong> is better. In my opinion these are pretty crucial oversights!
        </p>
        <p>
        <h3>Apples to Oranges</h3>
        In order to compare 2 things they need to be similar. Most people (even so-called experts) don't understand that comparing <strong>PHP</strong> to <strong>ASP.NET</strong> is not apples to apples. <strong>PHP</strong> is a programming language. <strong>ASP.NET</strong> is NOT a programming language. The language used for <strong>ASP.NET</strong> is generally C# (VB.NET can also be used, but rarely ever is).
        Please make sure you understand that previous paragraph! Let it settle and be processed. If you read any other articles comparing <strong>PHP</strong> to <strong>ASP.NET</strong> or WebAPI it is probably written by someone who doesn't understand both technologies. <strong>PHP</strong> is a 
        <strong>programming language</strong>, <strong>ASP.NET</strong> is a <strong>web framework</strong>.
        </p>
        <p>
        <h3><strong>PHP</strong> vs C#</h3>
        So let’s compare an apple to an apple, <strong>PHP</strong> vs C#. Here is what Google gives as a definition to each:
        </p>
        <p>
            C# - An object-oriented programming language in development from Microsoft, which is intended to combine the computing power of C++ with the programming ease of Visual Basic.
        </p>
        <p>
            <strong>PHP</strong> - <strong>PHP</strong> is a server-side scripting language designed for web development but also used as a general-purpose programming language.
        </p>
        <p>
            Already Google is skewing reality. C# is more widely used in NON-web applications than <strong>PHP</strong> is used as a general purpose programming language. How many people can say they’ve used <strong>PHP</strong> for a non-web application? C# is used for Windows phone apps, tools, and even cross platform mobile frameworks (MONO).
        </p>
        <p>
            One thing that Google does get right is saying C# is an object-oriented programming language where <strong>PHP</strong> is NOT. No, it didn't just miss that in the definition. <strong>PHP</strong> is NOT an object-oriented programming language. You can use it to mimic object-oriented practices (as you can any language) but it is not ingrained into the language itself as C# is.
        </p>
        </p>
        <p>
        <h3>Language Performance</h3>
        As someone who has worked in games I understand the importance of performance. A lot of comparisons that are made conclude that <strong>PHP</strong> is faster at the core level. I’ll give that one to <strong>PHP</strong>. However, any engineer will tell you that modern hardware is so fast anyways that the core language speed really isn't that relevant anymore. If it was relevant, everyone would be programming in ASSEMBLY which is a low-level language that can talk directly with the hardware. The reason no one does is because it takes many lines of codes to do the most basic operations and building an app with ASSEMBLY would take years to complete.
        </p>
        <p>
            Since newer faster hardware has been developed new languages have been developed to take advantage of them, including C#. C# was built to make it easier for engineers to build apps quicker at the expense of a loss in overall performance (again, on modern hardware this is negligible).
        </p>
        <p>
            I say all that to state that the performance of the language itself really isn’t what makes a program run faster or slower. Instead, it is how the code is written and architecture that determines how well it will perform.
        </p>
        <p>
            In my experience, a lot of performance can be gained by using parallel processing (aka threading). Parallel processing allows multiple chunks of code to run at the same time in parallel. <strong>PHP</strong> does NOT support threading. C# not only supports it but makes it so simple that in most cases it only requires you to add the keyword async/await to a function (**if you’re using an SDK or existing code that was built with async in mind).
        </p>
        <p>
            There are a number of other reasons why C# is better than <strong>PHP</strong>, but in my opinion the lack of threading support is the only argument needed.
        </p>
        <p>
        <h3>The Real Comparison</h3>
        As I said at the beginning of this post, we need to be comparing apples to apples. So what is the apple to <strong>ASP.NET</strong> MVC and WebAPI? Well, there are a lot of apples out there. These are generally called frameworks and you can see a lot of them by just Googling ‘<strong>PHP</strong> frameworks’.
        </p>
        <p>
            I only have experience with the Laravel framework, so I can only provide comments about that one. I will say that the Laravel framework is an amazing framework and does a lot that the <strong>ASP.NET</strong> frameworks don’t’ do out of the box. The engineers that built Laravel have a lot of experience and put a lot of thought behind their framework, merging be best of the best from other <strong>PHP</strong> frameworks and even <strong>ASP.NET</strong> frameworks.
        </p>
        <p>
            If you’re a big supporter of <strong>PHP</strong>, go back and re-read that paragraph over and over so you feel better about this post. Just to re-iterate, the Laravel framework (built with <strong>PHP</strong>) has more features out of the box than <strong>ASP.NET</strong> MVC or WebAPI. I am a huge fan of Laravel. The only thing I don’t like about Laravel is that I am limited by what <strong>PHP</strong> can do.
        </p>
        <p>
            Laravel (and <strong>PHP</strong>) is great for specific scenarios. But when it comes to big projects and enterprise level software, you are going to hit your limits with Laravel far faster than you would with <strong>ASP.NET</strong>. Limits including scalability, maintainability, and future platform support.
        </p>
        <p>
            Here's a feature comparison of apples to apples: <a href="http://vschart.com/compare/laravel/vs/asp-net-mvc-framework">http://vschart.com/compare/laravel/vs/asp-net-mvc-framework</a>
        </p>
        <p>
        <h3>Outdated Information</h3>
        When reading any article or post on this topic, make sure you check the date. Most of the time you are reading an old article with outdated information. Microsoft tools (Visual Studio) now have free offerings (FREE!). Windows servers now cost almost the same as Linux servers (albeit a bit more expensive still). And they are now embracing the open source/cross platform community as evident by this article:
        </p>
        <p>
            <a href="http://www.macrumors.com/2014/11/12/microsoft-net-open-source-os-x/">http://www.macrumors.com/2014/11/12/microsoft-net-open-source-os-x/</a>
        </p>
        <p>
        <h3>Community Support</h3>
        One last argument that I want to address is the go to statement that every <strong>PHP</strong> engineer makes: “The <strong>PHP</strong> community of developers is bigger than <strong>ASP.NET</strong>”
        </p>
        <p>
            Yes, there are more <strong>PHP</strong> developers than <strong>ASP.NET</strong> developers. I agree. However, as I have said in this post, <strong>PHP</strong> is comparable to C#, not <strong>ASP.NET</strong>. The <strong>PHP</strong> community has a lot of people behind it but they are spread out among all of the <strong>PHP</strong> web frameworks. I don’t know the exact number, but I’m willing to bet the number of C# developers is very comparable to <strong>PHP</strong> developers (not even including C and C++ developers that can easily transition to C#).
        </p>
        <p>
            So, to make the more accurate comparison, are there any <strong>PHP</strong> frameworks out there that can say they have more developers supporting them than the <strong>ASP.NET</strong> frameworks do? No. The <strong>ASP.NET</strong> developers are all backing MVC and WebAPI instead of everyone going out trying to build their own web framework like the <strong>PHP</strong> community is doing.
        </p>
    </div>
    
</blockquote>