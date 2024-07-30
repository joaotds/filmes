<?php

class Filme {
    private $titulo;
    private $diretor;
    private $ano;
    private $link;



    /**
     * Get the value of titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     */
    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of diretor
     */
    public function getDiretor()
    {
        return $this->diretor;
    }

    /**
     * Set the value of diretor
     */
    public function setDiretor($diretor): self
    {
        $this->diretor = $diretor;

        return $this;
    }

    /**
     * Get the value of ano
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set the value of ano
     */
    public function setAno($ano): self
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get the value of link
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set the value of link
     */
    public function setLink($link): self
    {
        $this->link = $link;

        return $this;
    }
}


$filme1 = new Filme();
$filme1->setTitulo("O poderoso chefão")->setDiretor("Francis Copolla")->setAno("1972")
        ->setLink("https://m.media-amazon.com/images/M/MV5BM2MyNjYxNmUtYTAwNi00MTYxLWJmNWYtYzZlODY3ZTk3OTFlXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg");

        $filme2 = new Filme();
        $filme2->setTitulo("Forrest Gump - O Contador de Histórias")->setDiretor("Robert Zemeckis")->setAno("1994")
                ->setLink("https://upload.wikimedia.org/wikipedia/pt/thumb/c/c0/ForrestGumpPoster.jpg/240px-ForrestGumpPoster.jpg");
                
                $filme3 = new Filme();
        $filme3->setTitulo("Tubarão")->setDiretor("Steven Spielberg")->setAno("1975")
                ->setLink("https://s3.amazonaws.com/nightjarprod/content/uploads/sites/192/2021/05/10145225/l1yltvzILaZcx2jYvc5sEMkM7Eh.jpg");

                $filme4 = new Filme();
$filme4->setTitulo("Pulp Fiction")->setDiretor("Quentin Tarantino")->setAno("1994")
        ->setLink("https://upload.wikimedia.org/wikipedia/pt/thumb/8/82/Pulp_Fiction_cover.jpg/230px-Pulp_Fiction_cover.jpg");

$filme5 = new Filme();
$filme5->setTitulo("Matrix")->setDiretor("Lana Wachowski, Lilly Wachowski")->setAno("1999")
        ->setLink("https://upload.wikimedia.org/wikipedia/pt/c/c1/The_Matrix_Poster.jpg");

        



echo "<div style='border: solid 1px; width: 300px; margin-top: 20px;'>";
echo $filme1->getTitulo(). "<br>";
echo $filme1->getDiretor(). "<br>";
echo $filme1->getAno(). "<br>";
echo "<img style='width: 100%; height: auto;' src='" . $filme1->getLink() . "' /><br>";
echo "</div>";

echo "<div style='border: solid 1px; width: 300px; margin-top: 20px;'>";
echo $filme2->getTitulo(). "<br>";
echo $filme2->getDiretor(). "<br>";
echo $filme2->getAno(). "<br>";
echo "<img style='width: 100%; height: auto;' src='" . $filme2->getLink() . "' /><br>";
echo "</div>";

echo "<div style='border: solid 1px; width: 300px; margin-top: 20px;'>";
echo $filme3->getTitulo(). "<br>";
echo $filme3->getDiretor(). "<br>";
echo $filme3->getAno(). "<br>";
echo "<img style='width: 100%; height: auto;' src='" . $filme3->getLink() . "' /><br>";
echo "</div>";

echo "<div style='border: solid 1px; width: 300px; margin-top: 20px;'>";
echo $filme4->getTitulo(). "<br>";
echo $filme4->getDiretor(). "<br>";
echo $filme4->getAno(). "<br>";
echo "<img style='width: 100%; height: auto;' src='" . $filme4->getLink() . "' /><br>";
echo "</div>";

echo "<div style='border: solid 1px; width: 300px; margin-top: 20px;'>";
echo $filme5->getTitulo(). "<br>";
echo $filme5->getDiretor(). "<br>";
echo $filme5->getAno(). "<br>";
echo "<img style='width: 100%; height: auto;' src='" . $filme5->getLink() . "' /><br>";
echo "</div>";

?>
