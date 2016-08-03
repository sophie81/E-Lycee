<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert(
            [
                [
                    'user_id' => 1,
                    'title' => 'Un cadran solaire digital',
                    'abstract' => 'Il arrive que des résultats mathématiques très abstraits aient des retombées « concrètes » surprenantes.',
                    'content' => 'Supposons qu’on observe un objet X dans l’espace en en faisant le tour et en prenant par exemple des photographies dans toutes les directions. Comme nous sommes mathématiciens, nous n’hésitons pas à dire que nous avons une infinité de photographies, une pour chaque direction !
                    Réciproquement, supposons maintenant qu’on dispose d’une infinité de photos, une pour chaque direction. Existe-il un objet X dans l’espace dont les photos sont celles dont on dispose ? Par exemple, si toutes nos photos représentent toujours le même disque, alors on sait bien que X peut être une boule. Mais si par exemple, certaines photos représentent un rectangle et d’autres un disque ?
                    Alors X est peut-être un cylindre, qui est vu comme un disque par en haut et comme un rectangle quand on le regarde de côté.
                    Falconer démontre alors le théorème qu’un tel objet X existe toujours, quelles que soient les photos dont on dispose.
                    Pour illustrer son théorème, un peu comme une plaisanterie, Falconer a l’idée d’un cadran solaire digital.
                    « Il est possible, au moins en théorie, de construire un ensemble dans l’espace dont l’ombre à presque tout moment de la journée donne l’heure écrite en chiffres » écrit-il dans son article.En 1986, il aurait été bien surpris d’entendre qu’un jour un brevet serait déposé et qu’on pourrait acheter sur internet un cadran solaire digital pour la somme de 91 € !
                    C’est pourtant ce qui fut fait par H. Scharstein, W. Krotz-Vogel et D. Scharstein.
                    Ainsi, lorsque l’on installe son cadran solaire digital dans son jardin, convenablement orienté bien sûr, l’ombre du soleil indique l’heure en chiffres directement sur le cadran ! Incroyable mais vrai.
                    Une indication sur le preuve du théorème de Falconer ? Le principe est celui des stores vénitiens. La lumière du soleil est bloquée par un store vénitien dans presque toutes les directions et passe sans difficultés dans les directions parallèles aux lattes du store. Si l’on superpose un grand nombre de stores, orientés dans de multiples directions, on peut faire en sorte que la lumière passe dans certaines directions et pas dans d’autres, un peu selon notre souhait. C’est l’idée générale...
                    Pour plus de détails, le lecteur a deux possibilités. La première est de lire l’article de K. Falconer, s’il est suffisamment versé en mathématiques.
                    Falconer, K. J. Sets with prescribed projections and Nikodým sets. Proc. London Math. Soc. (3) 53 (1986), no. 1, 48—64.',
                    'url_thumbnail' => 'http://images.math.cnrs.fr/local/cache-vignettes/L445xH294/arton58-e8adb.jpg?1456487591',
                    'date' => '2016-01-16 10:46:06'
                ],
                [
                    'user_id' => 1,
                    'title' => 'Juillet 2016, 5ème défi',
                    'abstract' => 'Nous vous proposons un défi du calendrier mathématique 2016 chaque vendredi et sa solution la semaine suivante.',
                    'content' => 'Semaine 31 :
                    Soient a, b, c et d des entiers positifs tels que a>b>c>d et
                    (1−a)(1−b)(1−c)(1−d)=10.
                    Trouver toutes les valeurs possibles de a+b−c−d.',
                    'url_thumbnail' => 'http://images.math.cnrs.fr/local/cache-vignettes/L353xH350/arton3973-d5ddf.png?1466448572',
                    'date' => '2016-01-22 11:15:00'
                ],
                [
                    'user_id' => 1,
                    'title' => 'Un vol au dessus des montagnes de Julia',
                    'abstract' => 'Les ensembles de Julia sont parmi les exemples les plus célèbres d’ensembles fractals.',
                    'content' => 'es concepts mathématiques présentent une réalité bien plus profonde que l\'apparence matérielle.
                    Depuis toujours les hommes montrent de la curiosité à comprendre les lois de l\'univers.
                    La nature construit des structures en appliquant un principe d\'économie. Elle crée un modèle architectural et le répète à différentes échelles à l\'intérieur et en dehors de l\'objet. Par exemple le système de ramification des plantes.
                    On pense même que dans un état de bonne santé, le corps est en situation chaotique et que dans la maladie le corps adopte un état de réponses répétitives. La maladie fait que le corps perd de sa complexité et donc perd son comportement fractal.
                    Les fractales mathématiques possèdent la propriété d\'autosimilarité, elles sont donc infiniment complexes quelle que soit l\'échelle d\'observation.
                    Toutefois dans la nature, tout n\'est pas aussi parfait. On ne peut comparer un objet à une fractale idéale mathématique que pour quelques niveaux de zoom. Le chou romanesco en est un exemple étonnant.
                    Le chou entier (niveau 1) est formé de copies alignées en spirale (niveau 2).
                    Chacune est composée de d\'autres copies aussi disposées en spirale (niveau 3).
                    Le phénomène se reproduit de nouveau une dernière fois (niveau 4) .
                    Les fractales commencent à peine à être explorées et constituent une manière assez nouvelle de voir le monde. ',
                    'url_thumbnail' => 'http://images.math.cnrs.fr/local/cache-vignettes/L600xH338/arton1643-03f34.jpg?1456482360',
                    'date' => '2016-02-20 15:46:06'
                ],
                [
                    'user_id' => 1,
                    'title' => 'La machine à démanteler les impossibles',
                    'abstract' => '« Une machine pour démonter des paradoxes, une machine pour en découvrir d’autres, une machine pour les unifier tous... »',
                    'content' => 'Il y a trente ans exactement paraissait un ouvrage mathématique austère. Son titre Relations aux dérivées partielles sonnait étrangement même aux oreilles des spécialistes, sa couverture était minimaliste, son écriture serrée, son contenu abstrait. Chacune de ses 363 pages réclamait une concentration complète et n’offrait aucune facilité de lecture. Il n’était pas difficile de deviner les réactions qu’il allait susciter : un intérêt poli suivi d’un oubli immédiat.
                    Mais c’était sans compter l’immense réputation de son auteur, l’un des plus grands mathématiciens contemporains, Mikhaïl Gromov. Il s’est donc trouvé des lecteurs téméraires et obstinés pour s’engager dans l’ouvrage. Une lectrice en particulier. La mathématicienne Dusa McDuff. Peu de temps après la parution de l’ouvrage, elle rédige une recension dans les bulletins de la Société Américaine de Mathématiques. Sa critique se termine ainsi : « Le livre est un fantastique trésor d’idées ». Un trésor vraiment ? Sans aucun doute. Un immense trésor qui a enrichi les mathématiques et l’imagination de centaines de savants. Un trésor que nous allons dévoiler aujourd’hui.
                    Tout commence dans les années 50 avec une succession de résultats mathématiques défiant l’intuition et dont le plus célèbre est le retournement de la sphère. Imaginez une sphère réalisée avec un matériau si souple qu’elle pourrait être déformée à l’envi bien plus facilement qu’un ballon d’anniversaire. Imaginez encore que ce matériau fictif possède la propriété fantastique de se laisser traverser sans se déchirer. Avec un tel matériau deux parties différentes de la sphère qui seraient mises en contact au cours d’une déformation pourraient ainsi continuer leur mouvement en se traversant l’une l’autre.
                    Toutefois, hormis cette propriété irréelle, ce matériau serait soumis aux mêmes contraintes que celles d’une peau de ballon ordinaire : il ne pourrait être plié ou pincé sans éclater. En 1957, le mathématicien Stephen Smale montre qu’avec un tel matériau on pourrait réaliser un tour de magie spectaculaire : déformer une sphère de façon à permuter ses faces intérieures et extérieures. Ceci signifie que si l’on commence avec une sphère dont l’extérieur est peint en rouge et l’intérieur en bleu, on retrouvera en fin de déformation une sphère identique dont l’extérieur sera en bleu et l’intérieur en rouge.
                    Inutile de préciser que la découverte d’une telle diablerie a offert à Smale une célébrité immédiate. L’existence d’un retournement de la sphère heurtait l’intuition de tous les mathématiciens. Elle était pourtant rigoureusement établie selon une logique mathématique implacable. La stupéfaction était totale. La frustration aussi car la démonstration de Smale n’indiquait pas comment retourner concrètement la sphère. Elle affirmait simplement qu’un retournement était faisable en laissant entier le mystère de sa réalisation effective. Dans les années qui suivront, il faudra bien des efforts aux mathématiciens pour réussir à percer ce mystère. Ces efforts conduiront en 1977 à un tour de force infographique : la réalisation par Max Nelson d’un film en image de synthèse montrant ce retournement.',
                    'url_thumbnail' => 'http://images.math.cnrs.fr/local/cache-vignettes/L452xH350/arton4024-10eee.jpg?1466269494',
                    'date' => '2016-03-01 17:46:06'
                ],
                [
                    'user_id' => 1,
                    'title' => 'Les systèmes articulés et leur configurations',
                    'abstract' => 'Qu’est-ce qu’un système articulé ?',
                    'content' => 'Qu’est-ce qu’un système articulé ?
                    Un système articulé est un ensemble de tiges rigides, qui évoluent la plupart du temps dans un plan (horizontal ou vertical), reliées par des articulations à leurs extrémités. Ces systèmes ont été étudiés par de nombreux mathématiciens du 19e siècle comme Pafnouti Tchebychev, James Sylvester, et Alfred Kempe.
                    L’un des problèmes qui ont motivé cette étude mathématique est celui de la machine à vapeur : il fallait inventer un mécanisme qui permette de transmettre l’énergie du piston (qui suit un mouvement rectiligne) à un autre élément (par exemple, une roue ou une pompe). L’idée de James Watt était de trouver un système articulé formé de tiges rigides dont certains points seraient fixés à une base immobile, tandis qu’un autre point (où serait fixé le piston) serait contraint à se déplacer sur une ligne droite. D’autres tiges relieraient ensuite le système à l’élement à mettre en mouvement. Il n’a pu trouver qu’une solution approchée, satisfaisante pour un ingénieur, mais pas pour un mathématicien. Presque cent ans plus tard, dans les années 1860, plusieurs solutions exactes ont été découvertes, mais toutes se sont avérés trop complexes à mettre en œuvre en raison du trop grand nombre d’articulations (qui génèrent des frottements), et les ingénieurs lui ont toujours préféré la solution de Watt.',
                    'url_thumbnail' => 'http://images.math.cnrs.fr/local/cache-vignettes/L623xH350/arton3991-05333.png?1464782584',
                    'date' => '2016-03-13 10:46:06'
                ],
                [
                    'user_id' => 1,
                    'title' => 'Celui qui n\'a rien.',
                    'abstract' => '« Je pense toutefois que la reprise incessante des définitions fondamentales en mathématiques est chose féconde »',
                    'content' => 'La définition la plus simple de la géométrie élémentaire, n’est-elle pas celle de « point » ? On a l’idée intuitive d’un point marqué par un stylo sur le cahier ou par de la craie au tableau depuis l’école primaire… c’est juste un « point »… si donc je mets un point après l’autre, j’arriverai à obtenir un segment…
                    Mais non… En dépit de cette évidence, Aristote montre que cette définition de segment (qu’il appelle « continu ») conduirait à une contradiction :
                    il est impossible qu’un continu soit formé par des indivisibles, par exemple qu’une ligne soit formée de points….
                    Aristote, La Physique [1]
                    Pour montrer ce paradoxe, Aristote donne les définitions de « continu » (ce dont les extrémités sont une seule chose), « contact » (ce dont les extrémités sont ensemble), « consécutif » (ce entre quoi il n’y a aucun intermédiaire du même genre). Il réfute successivement la possibilité pour des points de former le continu, d’être en contact et d’être consécutifs en développant une sorte de point de vue « topologique » sur la droite.
                    Mais alors le point ne peut avoir aucune dimension.
                    Le point est ce dont la partie est nulle
                    écrit Euclide dans les Éléments, et même tout au début [2] pour échapper au paradoxe d’Aristote (la « partie » désigne ici la dimension). Mais alors, qu’est-ce qu’un « point » ? Il faut, semble-t-il, se libérer de l’intuition, du stylo et de la craie pour le définir.
                    J’ai autrefois assez longuement réfléchi sur ce petit objet – qui n’a rien d’essentiellement “petit”. Je m’en étais fait une “définition” qui ne faisait pas intervenir la petitesse, et que je n’aurai pas l’impudence (ni le courage) de vous énoncer.
                    Lettre de Paul Valery à Tullio Levi-Civita, Paris, 18 septembre 1934
                    On pourrait essayer de changer de point de vue en regardant le « point » comme le véritable générateur d’une ligne (courbe ou droite) : le moteur qui, à travers son mouvement, donne lieu à toutes les courbes géométriques. Pour développer l’idée de « point » comme élément générateur, Levi-Civita mobilise d’autres concepts, parfois très compliqués, comme la notion de « temps ».
                    Parmi [nos représentations mentales] les plus simples il y a l’image du mouvement d’un point géométrique. Cette image est une abstraction, on y arrive à travers la pure logique en introduisant les postulats géométriques usuels et le concept primitif de temps.
                    T. Levi-Civita, 1934 [3]
                    Mais alors, d’où vient le « point » ?
                    Ce point de vue traditionnel est génétique : les lignes s’engendrent [dans le temps, dirait Levi-Civita]. Le point de vue moderne est ontologique : les points préexistent et sont sans identité propre.
                    P. Cartier, « La folle journée, de Grothendieck à Connes et Kontsevich. Évolution des notions d’espace et de symétrie » [4]',
                    'url_thumbnail' => 'http://images.math.cnrs.fr/local/cache-vignettes/L356xH350/arton2536-5096b.jpg?1456483054',
                    'date' => '2016-04-16 17:46:06'
                ],
                [
                    'user_id' => 1,
                    'title' => 'Tresses en mouvement',
                    'abstract' => '« Des tresses sur un site dédié aux mathématiques ? »',
                    'content' => 'Les tresses ont déjà fait leur apparition à plusieurs reprises sur ce site. Qu’on se rappelle :
                    Les tresses : de la topologie à la cryptographie de Luis Paris ;
                    Les beaux entrelacs de Christian Mercat ;
                    le portrait de Vaughan Jones, Des tresses au kitesurf ;
                    ou les récentes Carottes tressées de Patrick Popescu-Pampu.
                    Je ne peux bien sûr qu’encourager nos lecteurs à lire ou relire chacun de ces articles, chacun enrichissant ce magnifique sujet à sa façon. Et pour celles et ceux qui souhaiteraient en savoir davantage encore, je peux recommander l’exposé Le problème d’isotopie des tresses de Patrick Dehornoy, à lire [1] ou à regarder.
                    Dans cet article, nous vous proposons de faire connaissance avec Ester Dalvit qui vient de réaliser un film à propos de la théorie des tresses. Au menu donc, deux interviews pour découvrir ce film et son auteure.
                    Ester Dalvit (que vous pouvez retrouver sur sa chaîne YouTube) est une étudiante en post-doctorat en mathématiques à l’Université de Trento qui, à l’occasion de sa thèse, a réalisé un très beau projet autour de la théorie des tresses. Ce projet, c’est le site web
                    Salut Ester. Il fait un soleil magnifique du côté des calanques marseillaises en ce mois de juin mais on se doute que tu n’es pas venue au CIRM juste pour ça. N’est-ce pas ?
                    E.D. En effet ! Cette semaine (du 23 au 27 juin), il y a une école thématique avec quatre mini-cours autour de la Topologie géométrique et quantique en dimension 3. Comme beaucoup de participants ici (je crois qu’on est environ 80), je suis venue apprendre de nouvelles mathématiques, en particulier autour de la théorie des nœuds. En fait, je termine un post-doc à Trento et à partir de septembre je serai du côté de Toronto au Canada. Avec un double projet : un projet de recherche et un nouveau projet de visualisation mathématique.',
                    'url_thumbnail' => 'http://images.math.cnrs.fr/local/cache-vignettes/L525xH350/arton2754-ba81e.png?1456509889',
                    'date' => '2016-05-16 10:46:06'
                ],
                [
                    'user_id' => 1,
                    'title' => 'Des triangles équilibrés',
                    'abstract' => 'La notion de triangle de Steinhaus équilibré et le problème de Molluzzo ont été abordés.',
                    'content' => 'Le plus petit entier positif e tel que ρm(2e)=1 est appelé l’ordre multiplicatif de 2 modulo m. On le note Om(2).
                    Par exemple, on obtient O3(2)=2 pour m=3 et O5(2)=4 pour m=5 car
                    {21=0×3+222=1×3+1⟹⟹ρ3(21)=2,ρ3(22)=1.et 21=0×5+222=0×5+423=1×5+324=3×5+1⟹⟹⟹⟹ρ5(21)=2,ρ5(22)=4,ρ5(23)=3,ρ5(24)=1.
                    Déterminer l’ordre multiplicatif de 2 modulo m est un problème très difficile, il n’existe pas de formule explicite donnant la valeur de Om(2) en fonction de m.
                    Continuons avec quelques notations :
                    Soit S=(a1,a2,…,an) une suite de longueur n. Pour tout entier m⩽n, le segment initial de S de longueur m est la sous-suite constituée des m premiers termes de S, c’est-à-dire S[m]=(a1,a2,…,am). Par exemple, pour S=(1,0,3,4,7,2,0,1,1,8), on a S[5]=(1,0,3,4,7).
                    Si S et T sont des suites de longueurs finies, on notera par ST∞ la suite pseudo-périodique qui commence par S et qui continue avec T répétée périodiquement par la suite. Par exemple, pour S=(1,0) et T=(2,5,6), on a ST∞=(1,0,2,5,6,2,5,6,2,5,6,……).
                    En 2008, il a été démontré dans [3] que, pour toute valeur impaire de m, les triangles de Steinhaus modulo m engendrés à partir de la suite des entiers naturels sont équilibrés pour une infinité de longueurs qui dépendent de la valeur de Om(2).
                    Théorème. Soit m un nombre impair et soit S la suite des entiers naturels modulo m, c’est-à-dire la suite périodique S=(0,1,…,m−1)∞. Alors, les triangles de Steinhaus ▽S[t] de taille t sont équilibrés pour tous entiers positifs t multiple de ppcm(Om(2),m), où ppcm(Om(2),m) est le plus petit commun multiple de Om(2) et m.
                    Par exemple, pour m=3, comme O3(2)=2 et ppcm(O3(2),3)=6, les triangles de Steinhaus ▽(0,1,2)2k sont équilibrés modulo 3 pour tout entier positif k. Des éléments de preuve de cet exemple du résultat pour m=3 sont donnés ci-dessous.
                    Cela résout l’exercice laissé au lecteur à la fin de la première partie de cet article.
                    Il s’agit d’un type de preuve classique pour ce genre de résultats, que l’on appelle preuve par découpage et comptage.
                    Eléments de preuve pour m=3
                    Ce théorème permet, entre autres, de fournir une réponse complète et positive au problème de Molluzzo pour toutes les valeurs m de la forme m=3k. Pour les autres valeurs impaires de m, la réponse n’est pas complète mais l’existence d’une infinité de triangles équilibrés est tout de même obtenue. Le problème de connaitre l’existence d’une infinité de triangles de Steinhaus équilibré modulo m est appelé problème de Molluzzo faible.',
                    'url_thumbnail' => 'http://images.math.cnrs.fr/local/cache-vignettes/L386xH350/arton2705-9c5e3.png?1456507664',
                    'date' => '2016-06-11 10:46:06'
                ],
                [
                    'user_id' => 1,
                    'title' => 'Kaleidoscope',
                    'abstract' => 'Le kaléidoscope est un tube formé d’un agencement de miroirs qui contient des fragments de verre colorés, mobiles, aux formes variées.',
                    'content' => 'Un miroir
                    Un rayon lumineux qui vient heurter un miroir est réfléchi ; les angles que forme le miroir avec le rayon incident et le rayon réfléchi sont égaux. Lorsqu’on scrute un miroir, les objets observés se situent alors dans une zone qui dépend de la taille du miroir et de l’angle d’observation. C’est un phénomène bien connu des conducteurs, qui se méfient de l’angle mort dans leur rétroviseur.
                    Ce n’est pas une copie conforme de soi-même qui s’offre à nous dans un miroir ; la gauche et la droite ont été inversées : si l’on se gratte l’oreille droite, l’image se gratte l’oreille gauche. En outre, le reflet parait relativement éloigné, la distance apparente étant égale au double de notre distance au miroir. Tout ceci illustre au quotidien des propriétés de base de la symétrie plane, car notre reflet apparait en effet transformé par une telle symétrie orthogonale. La figure suivante résume les propriétés principales de cette transformation ; le dessin y est une « vue de dessus » et correspond donc à la symétrie par rapport à une droite du plan.',
                    'url_thumbnail' => 'http://images.math.cnrs.fr/local/cache-vignettes/L500xH350/arton3901-8a577.jpg?1456821199',
                    'date' => '2016-06-16 14:46:06'
                ],
                [
                    'user_id' => 1,
                    'title' => 'Rome (ou pas ?), 1939',
                    'abstract' => 'C’est l’histoire d’un non-événement, le Congrès Volta qui ne se tint pas à Rome en 1939.',
                    'content' => 'C’est l’histoire d’un non-événement. Mais on ne le sait pas, alors on l’organise. Ce sera, croit-on, un grand congrès [1]. On a choisi un sujet [2] dans lequel les mathématiciens italiens se sont illustrés (le congrès aura lieu à Rome).
                    On choisit les conférenciers avec soin : ce doivent être de bons scientifiques, dont la présence honorera le congrès, la ville, le pays, le régime [3]. On vérifie par exemple qu’Élie Cartan, malgré son prénom biblique, n’est pas juif, on écarte le Français Paul Montel parce qu’on le croit franc-maçon, le Belge Théophile De Donder parce qu’on le sait antifasciste... Aucun d’eux n’en sait rien, bien entendu.
                    Et on écrit aux heureux élus pour les inviter au Congrès Volta, qui se tiendra à Rome en septembre 1939.
                    C’est l’histoire de deux mathématiciens qui reçoivent une invitation à participer à ce congrès.
                    Le premier [4] est néerlandais, il s’appelle Jan Arnoldus Schouten [5]. C’est une erreur de l’avoir invité car voici qu’il se fâche et qu’il écrit une lettre dont il envoie copie à plusieurs de ses collègues et dans laquelle il déclare notamment :
                    Messieurs, je n’ai pu répondre immédiatement à l’amicale invitation de l’Accademia Reale d’Italia à participer au congrès Volta de 1939 car je voulais d’abord savoir si les savants italiens et étrangers juifs seraient invités ou pas. J’ai donc écrit personnellement au Prof. Severi [6]. Sa réponse ne laisse malheureusement aucun doute à ce sujet. Je me vois donc contraint à refuser votre amicale invitation. Je vous prie toutefois de ne pas considérer ce refus comme une action contre l’Italie, j’ai le plus grand respect pour la science italienne et les sentiments les plus amicaux pour mes collègues italiens. Il m’est toutefois impossible de participer à un congrès sur la géométrie différentielle duquel seront exclus, pour des raisons raciales, des savants italiens et étrangers tels que Tullio Levi Civita, Guido Fubini, Benjamino Segre, D. van Dantzig et Ludwig Berwald [7].
                    Le deuxième mathématicien est français, il s’appelle Élie Cartan. C’est un des plus importants spécialistes de géométrie différentielle, il est lié à Schouten avec lequel il a écrit plusieurs articles au cours des années précédentes. Il fait naturellement partie des destinataires de la lettre de Schouten. Il la lit attentivement et la conserve soigneusement. Il prend le temps de la réflexion, puis il répond positivement à l’invitation et écrit à Severi [8] :
                    Élie Cartan (1869-1951) J’ai l’honneur de vous accuser réception de l’invitation que vous m’avez fait envoyer à participer au IXe Convegno Volta qui aura lieu à Rome en octobre prochain. Je suis très honoré de cette invitation et je vous en remercie. J’assisterai certainement à cette réunion sauf événements imprévus et il me sera très agréable de passer quelques jours avec les collègues mathématiciens de Rome [9].
                    C’est l’histoire d’un mathématicien italien qui est, lui aussi, un des spécialistes les plus renommés de géométrie différentielle. Il n’est pas particulièrement lié avec Élie Cartan, qu’il a rencontré, bien sûr, et avec qui il échange une correspondance professionnelle assez peu personnelle.',
                    'url_thumbnail' => 'http://images.math.cnrs.fr/local/cache-vignettes/L555xH350/arton3051-c46d1.jpg?1456486360',
                    'date' => '2016-07-16 10:46:06'
                ],
            ]
        );
    }
}
