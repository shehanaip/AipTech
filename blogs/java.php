<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../icons/logo.png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Noto+Sans:wght@300&family=Potta+One&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="blog-in.css">
    <title>Blogs-java</title>
</head>
<body>
<div class="Main_nav">
        <div class="container">
        <a href="../index01.php" class="logo"><img src="../icons/logo.png" alt="lo" ></a>
    </div>
</div>
<div class="rust">
    <div class="container">
        <div class="row"><div>
            <div class="col-lg-6">
            <h1>IntelliJ Scala Plugin 2023.3 Is Out!</h1>
            </div>
        </div>
        <div>
        <div class="col-lg-7">
            <p>As usual, the new release focused much on improving the Scala 3 support. Especially enums received much attention. The Scala plugin now recognizes that enums cannot be extended and highlights such attempts; annotations and modifiers are now propagated correctly to generated symbols; type widening of apply methods is fixed to take only direct supers into account; and some false error highlighting due to duplicate synthetic elements were fixed. Auto-completion for enums works better now as well.

            Another thing we worked on is better analysis of Scala 3 code and getting rid of invalid error highlighting which sometimes appeared in semi-random situations, often when the code in question touched other files. Also, until now, IntelliJ Scala Plugin sometimes got confused with givens. In the 2023.3 release, this issue is over: the “Go to declaration” action executed on a given import works properly, and the automatically generated names assigned to givens are the same in the plugin as in the compiler.

On top of that, the support for inline parameter modifiers has been improved – they are now correctly highlighted in the code and displayed in the Parameter Info window.</p>
            </div>
        </div>
            
            <div>
                <div class="col-lg-6">
                    <h1>The X-Ray Mode</h1>
                </div>
            </div>
            <div>
                <div class="col-lg-9">
                    <p>Inlay hints, and other information displayed directly in the editor, next to the code can improve readability and greatly help the developer. But such functionality comes at a price. Readability is a subjective issue, and instead of appreciating the help, you may feel that the editor is now too crowded and cluttered with unnecessary text. You may decide to turn it off. But then, it may happen that your work takes you to a place you don’t know so well, and now additional information displayed directly in the editor could be helpful again. So you need to go to the settings and re-enable it.

Now, with X-Ray, you can keep inlay hints and all the other additional information disabled or only partially enabled to the point where you feel comfortable, and then press down the Control / Command button two times and hold it – all the other hints will appear, and will be displayed only for the length of time you keep Control / Command down.</p>
                </div>
            </div>
            <div>
                <div class="col-lg-6">
                    <h1>Syntax highlighting</h1>
                    <div>
                        <p>On the syntax highlighting front, we worked on better detection of unreachable code and false positive red code. The plugin now correctly recognizes code used in places around thrown exceptions and try/catch/finally blocks, and it considers the existence of implicit imports. Also, “unused declaration” and “the method can be private” inspections can now be suppressed for non-standard Scala files, such as worksheets.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="col-lg-12">
                    <h1>User Interface Improvements</h1>
                    <div>
                        <div class="col-lg-12">
                            <div>
                            <p>
                            In this release, some of our work on IntelliJ Scala Plugin went into making it easier to navigate the UI. The Scala settings are now easier to find through the text search. The Parameter Info window now only shows whether a parameter has a default argument but not the exact expression, which improves readability. In the “Find Usages” window, you can now click the “File structure” button and see more information about the usage of a given element. For the same reason of better readability, in the Structure View, you can now see that we display ?=> to distinguish implicit parameters from regular ones, as both writing implicit or using and not writing anything would be less readable. Besides, we’ve introduced new icons in the Structure View and the Project View for runnable objects, test classes, exception classes, and enums.From now on, the Scala plugin calculates all project transitive dependencies during reload/import. Before, only direct project dependencies were calculated, and the transitive ones were added as the dependencies of the direct dependencies, which sometimes led to situations when some project dependency that should not be a dependency for a project being taken into account. The new logic gives us more control over project dependencies and allows us to avoid that.

In multi-module projects, we’ve fixed the issue where an sbt module could incorrectly depend on the Scala SDK instead of the standard Scala library, as well as some issues related to sbt commands history being disrupted upon importing or reloading sbt projects. Actions related to reloading BSP and sbt are now made more accessible for you to find and use.

Also, we improved the process of fetching available Scala and SBT versions during new project creation. It has now been made cancelable and asynchronous, significantly speeding up the workflow. We’ve also resolved issues related to hanging when running or importing a project via sbt shell with sbt version 1.8.2 or newer on Windows.

Besides, in this release we drop support for the sbt-android plugin.
                            </p>
                            </div>
                            <div>
                            <div class="col-lg-6">
                            <img src="img/java.png"width="600px" alt="a" >
                            </div>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="col-lg-5">
                    <h1>
                    Summary
                    </h1>
                    <div>
                        <div class="col-lg-12">
                        
                            <p>
                            In this first part of our blog post series, we’ve defined the most common Rust compiler errors based on the usage data available in RustRover and discussed errors ranked from 10 to 6. In the next part, we’ll explore the top 5 most popular errors and also try to answer the question that’s on every Rust developer’s mind: “Which part of Rust is the most troublesome?”.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
<footer>
        <h5>Copyright © 2023-2023</h5>
    </footer>
</body>
</html>