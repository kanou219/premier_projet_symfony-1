# 1 -> Creer un Controller -> ExerciceController (Aide -> make:controller)
# 2 -> 1er attribut : ville -> valeur par defaut -> Paris
# 3 -> 2nd attribut : millier d'habitant ( exemple : 65000) -> valeur par defaut -> 65000
# 4 -> Affichage dans twig : variable -> {{ }}
# Aide -> Affichage conditionnel : {% %}
# 5 -> Affichage conditionnel : Si la ville a + de 1000 habitants => Alors c'est une petite ville
# 6 -> Affichage conditionnel : Si la ville a - de 1000 habitants => Alors c'est un village
# 7 -> Affichage conditionnel : Si la ville a + de 10000 habitants => Alors c'est une grande ville


symfony server:stop

php bin/console cache:clear


