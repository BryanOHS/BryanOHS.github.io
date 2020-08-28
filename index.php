<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/03c53f4719.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    
    <link rel="stylesheet" href="css/index.css" type="text/css">
    <link rel="stylesheet" href="css/nav.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <title>Project F</title>

</head>
<body id="body">
    <?php  require 'includes/header.php'?>
    
    <main>
    <?php 
          if(isset($_SESSION['userID'])){
              echo '<div  style="display:none"class="login-status"><p id="status">You are logged in!</p></div>';

          } else{
              echo '<div style="display:none" class="login-status"><p id="status">Log in now!</p></div>';
          }
          
        
        
        ?>
        <form action="includes/logout.inc.php" method="POST">
       <button type="submit" name="logout-submit">Log out</button>
    <section>
            <p id="p1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci saepe ex corporis autem quasi soluta, aperiam deleniti. Asperiores beatae vero eligendi voluptatum ipsa. Distinctio soluta laborum iste numquam. Id velit eos nemo voluptatibus quis aliquam, blanditiis, possimus autem mollitia sunt esse aspernatur consectetur inventore sit accusantium tenetur ducimus, explicabo optio? Amet, earum! Similique dolores aspernatur possimus. Corrupti, non eligendi? Eaque, quisquam architecto laboriosam blanditiis iste quod nesciunt fugiat ut debitis impedit excepturi accusamus facilis maxime alias voluptatibus eos mollitia? Quidem modi minima ad, voluptas molestiae corporis laborum quasi qui similique sunt illum mollitia harum enim at iure aspernatur explicabo dignissimos perspiciatis architecto veniam obcaecati tenetur! Quaerat ut est molestiae voluptatibus earum quis maxime eum, adipisci quibusdam debitis, nulla cum, architecto laboriosam aperiam qui et dolorem. Enim blanditiis nam minima provident iste eveniet sint? Nemo error fugit culpa sint velit nam sapiente magnam eos iure. Iste veniam nesciunt architecto incidunt et expedita voluptates non officia doloremque mollitia labore, esse laudantium omnis assumenda corporis provident ipsa ea, consequatur dolor. Voluptatibus cum repudiandae magni. Veniam tempore cumque molestiae assumenda quam dolorum qui repellat sunt fugit. Officiis exercitationem tempora cupiditate impedit saepe soluta quaerat voluptate ut, quidem consequatur doloremque, magni voluptas magnam rem quo nam minima modi veritatis esse. Fugiat officia corporis, maiores quod explicabo libero enim minima ratione et voluptates blanditiis, amet veniam autem ea praesentium unde, voluptate perferendis officiis est dolorem minus pariatur eos labore. Sed distinctio dolorum quos repellendus reprehenderit ipsum provident eveniet cum delectus maxime, ut corporis ad, nisi illo earum deserunt accusamus similique voluptates aut, nemo repudiandae labore dignissimos? Et nam suscipit dolores animi laboriosam necessitatibus ut. Facere expedita rerum a porro? Esse a reprehenderit asperiores repellendus tempore corporis dolorum facilis voluptatem dolores excepturi qui, libero eius. Laudantium repellendus aliquid, sequi ea voluptatem earum! Sapiente odit sed beatae ab repellat est eaque, veniam consectetur voluptates rerum doloremque, laborum quisquam facilis. Quo, sint aliquid. Amet veritatis velit facere quidem voluptatum voluptatibus! Pariatur, aperiam? Possimus exercitationem illo ipsam ab inventore, deserunt quisquam placeat aliquid, libero eos laborum maxime odit vel, cum non sapiente maiores perspiciatis voluptate atque cumque ducimus. Aliquid sapiente repudiandae in consequuntur, impedit illum voluptates explicabo accusantium tempore accusamus quis maxime nostrum! Alias odio repellendus officia veritatis magnam ut? Ipsum quam fugit exercitationem nihil, magnam harum dolore saepe ducimus illo suscipit porro quasi sint architecto ad voluptatibus nisi cum qui explicabo aliquam est. Necessitatibus quos maxime natus deserunt, ipsum ea! Numquam fuga neque vel totam rem. Harum error debitis cumque eius, sed atque possimus eveniet dolorum, optio quas, rerum est voluptatum voluptatibus voluptates! Ex explicabo earum laudantium, molestias provident, dignissimos ducimus, aliquid nihil necessitatibus quisquam reprehenderit asperiores quas praesentium repudiandae. Vel animi optio laboriosam perferendis illo tempore doloribus voluptatibus. Est distinctio dignissimos alias nesciunt pariatur? Dolores excepturi, ratione expedita exercitationem ex eaque atque praesentium, laudantium non consequuntur ut omnis, tenetur dolor aliquid quo! Eos eum obcaecati magnam assumenda delectus qui labore necessitatibus voluptates, accusantium aliquid, nihil voluptatem, cupiditate inventore totam in consequatur et quaerat incidunt cumque ut praesentium. Expedita cum hic mollitia? Nesciunt, cumque delectus fugit sequi libero eius, ea debitis sed blanditiis laborum soluta natus magni! Illum magnam quae possimus consequuntur corrupti architecto. Odit voluptatem maiores recusandae libero doloribus amet assumenda tenetur. Incidunt veniam molestiae optio nobis odio, iure doloremque officiis rerum obcaecati distinctio voluptates. Debitis, asperiores commodi perferendis totam iusto eveniet. Sit consectetur id doloribus quis, temporibus ullam obcaecati necessitatibus nemo et eius possimus itaque eaque sunt, ipsam modi magni, vel eum placeat maiores hic quo incidunt distinctio vero. Quisquam magni beatae ducimus nihil optio id odit recusandae, autem quaerat exercitationem quos libero facere quae illum repellendus illo dolores veniam quidem quis non qui explicabo? Repudiandae illo fugiat assumenda exercitationem rerum, placeat neque quaerat. Necessitatibus, deleniti illum. Corporis eligendi nihil laudantium hic ex asperiores, voluptas recusandae quia nisi, eum enim quis vel est earum facere odit numquam, aliquam tempore tenetur! Veniam doloribus labore necessitatibus nesciunt consequatur sapiente maiores ea cumque. Quae voluptate labore aperiam. Odio earum reprehenderit aperiam dicta inventore ipsa, ea et, sint provident sapiente quis animi tempore, exercitationem adipisci blanditiis eveniet cupiditate consequuntur dignissimos itaque minus! Quaerat, non laudantium. Voluptas suscipit tempora sed, temporibus repudiandae ipsa impedit nihil modi repellendus corporis quasi repellat aspernatur labore placeat sequi ab illo? Dolores sed maiores ex, itaque molestiae repellendus magni architecto, deserunt asperiores ad iure ab neque dolorem quos eum placeat recusandae voluptatem facere dignissimos exercitationem. Nostrum debitis dolore illum quas consequuntur sint, corrupti ducimus obcaecati odio blanditiis, tempore necessitatibus nulla doloremque ab, laudantium harum asperiores. Quo eius minus tempore inventore atque eum. Ipsum explicabo minima incidunt, temporibus architecto placeat vero rem error laborum nobis quisquam impedit quae sapiente. Sint amet, esse sit laboriosam assumenda necessitatibus quidem odio quo nesciunt! Nesciunt exercitationem modi sapiente ullam facilis aliquam explicabo, nostrum culpa sed praesentium libero dicta distinctio quibusdam, molestias, voluptates accusamus. Pariatur quas, voluptatibus consequatur, asperiores, accusamus beatae soluta quaerat eligendi temporibus repellendus rem quibusdam natus? Magnam soluta explicabo beatae quia atque id sequi, ipsa eaque accusantium? Dolores, veniam ad. Ratione placeat, nihil modi qui iusto illum minus! Architecto natus hic obcaecati molestiae blanditiis quam nulla voluptas, facilis dolorem animi! Accusamus a laboriosam facere doloremque corrupti, maiores ab vero fuga amet nam non assumenda similique harum optio voluptatibus ipsa totam quam nesciunt veritatis soluta aut. Quasi deleniti molestiae, facilis soluta neque at odio animi perspiciatis necessitatibus nostrum alias eaque dolores sequi natus reprehenderit corporis velit laborum totam asperiores assumenda quibusdam doloribus rem itaque hic. Laboriosam praesentium quae saepe animi? Optio sit unde repellendus maxime aliquam magni tenetur repudiandae esse autem nemo mollitia itaque iure accusantium, quisquam fuga cupiditate omnis sed accusamus adipisci fugiat aut molestiae. Excepturi, itaque cum tempora officiis sunt iusto eveniet? Deleniti facilis commodi placeat assumenda voluptate delectus praesentium libero ratione, fuga corrupti, reiciendis minima maxime provident in impedit aliquam doloribus ea animi molestias harum? Similique facere facilis alias et molestias nesciunt consectetur sint itaque voluptatum quisquam aut autem eligendi aperiam, dicta quaerat laboriosam quibusdam nobis dolorem fugit, accusamus reprehenderit. Laudantium quam dolores ea. Necessitatibus minima natus dignissimos!</p>

        </section>
    <?php 
    require 'welcome.php';
    ?>

    </main>
    

    <script src="js/index.js"></script>
    <script src="js/session.js">
       

       
    </script>
</body>


</html>
