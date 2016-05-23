<?php
include_once SITE_ROOT.'/store/NewsStore.php';
include_once SITE_ROOT.'/store/ProductStore.php';
/**
*  класс для имитации бд
*/
class Store
{
	private $newsContent;
	private $productContent;

	function __construct()
	{
		# code... // cоздание случайных десять записей
$this->newsContent=array();
$this->productContent=array();
		for ($i=0; $i <10 ; $i++) { 
	         		# code...
             $obj= new NewsStore($i,'Lorem'.$i,'05 10 2016','Lorem ipsum dolor sit amet, no has porro dicam. Ridens fuisset est ex. Tempor libris vix eu, alii everti scaevola eos ut. Quo ei augue labitur tibique. Mei ceteros sapientem eu.

Pri at libris electram comprehensam. Ad harum aliquip probatus sed, eu qui denique pertinacia, vel stet dolore scripserit cu. Cibo epicuri ei vis, ei omnes imperdiet pertinacia sed. Ne quo populo splendide. Pri ut apeirian indoctum disputationi, at per causae adipiscing, et movet tantas ius. Eu ubique doming vulputate qui.',
       'Lorem ipsum dolor sit amet, no has porro dicam. Ridens fuisset est ex. Tempor libris vix eu, alii everti scaevola eos ut. Quo ei augue labitur tibique. Mei ceteros sapientem eu.

Pri at libris electram comprehensam. Ad harum aliquip probatus sed, eu qui denique pertinacia, vel stet dolore scripserit cu. Cibo epicuri ei vis, ei omnes imperdiet pertinacia sed. Ne quo populo splendide. Pri ut apeirian indoctum disputationi, at per causae adipiscing, et movet tantas ius. Eu ubique doming vulputate qui.

Esse audire docendi te usu. Qui euismod noluisse placerat at, viris accusamus qui no, purto accumsan placerat sea ea. Cum elitr laoreet perfecto no. Usu ne dicit copiosae, ad mollis officiis antiopam est.

Dicunt debitis cu vel. Posse adipiscing ea vis. Id eam legere regione atomorum, dicat voluptatibus ne eam, ad sea velit senserit. Simul conceptam vel ad, at dicunt ornatus voluptatibus qui. Has simul mucius scripta eu. Cu vim diceret fastidii appetere, ei eum solet labores. Case dignissim evertitur eos ex, nihil minimum mel at.

Ut nam vitae nullam accommodare, docendi periculis instructior qui no, pri vero etiam congue in. Id alii vulputate interesset eos, te detracto facilisis ius. Nam libris virtute eu. Ius in commune atomorum vituperata. Pri omnis nonumy persequeris in
   Lorem ipsum dolor sit amet, no has porro dicam. Ridens fuisset est ex. Tempor libris vix eu, alii everti scaevola eos ut. Quo ei augue labitur tibique. Mei ceteros sapientem eu.

Pri at libris electram comprehensam. Ad harum aliquip probatus sed, eu qui denique pertinacia, vel stet dolore scripserit cu. Cibo epicuri ei vis, ei omnes imperdiet pertinacia sed. Ne quo populo splendide. Pri ut apeirian indoctum disputationi, at per causae adipiscing, et movet tantas ius. Eu ubique doming vulputate qui.

Esse audire docendi te usu. Qui euismod noluisse placerat at, viris accusamus qui no, purto accumsan placerat sea ea. Cum elitr laoreet perfecto no. Usu ne dicit copiosae, ad mollis officiis antiopam est.

Dicunt debitis cu vel. Posse adipiscing ea vis. Id eam legere regione atomorum, dicat voluptatibus ne eam, ad sea velit senserit. Simul conceptam vel ad, at dicunt ornatus voluptatibus qui. Has simul mucius scripta eu. Cu vim diceret fastidii appetere, ei eum solet labores. Case dignissim evertitur eos ex, nihil minimum mel at.

Ut nam vitae nullam accommodare, docendi periculis instructior qui no, pri vero etiam congue in. Id alii vulputate interesset eos, te detracto facilisis ius. Nam libris virtute eu. Ius in commune atomorum vituperata. Pri omnis nonumy persequeris in.'
,'admin or user');
             
             $this->newsContent[]=$obj;  
		}

			//    тоже самое но создаем продукт
				# code... // cоздание случайных десять продуктов
$this->productContent=array();
		for ($i=0; $i <10 ; $i++) { 
	         		# code...
             $obj= new ProductStore($i,'Lorem'.$i,'05 10 2016','Lorem ipsum dolor sit amet, no has porro dicam. Ridens fuisset est ex. Tempor libris vix eu, alii everti scaevola eos ut. Quo ei augue labitur tibique. Mei ceteros sapientem eu.

Pri at libris electram comprehensam. Ad harum aliquip probatus sed, eu qui denique pertinacia, vel stet dolore scripserit cu. Cibo epicuri ei vis, ei omnes imperdiet pertinacia sed. Ne quo populo splendide. Pri ut apeirian indoctum disputationi, at per causae adipiscing, et movet tantas ius. Eu ubique doming vulputate qui.',
       'Lorem ipsum dolor sit amet, no has porro dicam. Ridens fuisset est ex. Tempor libris vix eu, alii everti scaevola eos ut. Quo ei augue labitur tibique. Mei ceteros sapientem eu.

Pri at libris electram comprehensam. Ad harum aliquip probatus sed, eu qui denique pertinacia, vel stet dolore scripserit cu. Cibo epicuri ei vis, ei omnes imperdiet pertinacia sed. Ne quo populo splendide. Pri ut apeirian indoctum disputationi, at per causae adipiscing, et movet tantas ius. Eu ubique doming vulputate qui.'
,'admin or user','01.jpg');
             
             $this->productContent[]=$obj;  
		}
	
	
	}
	public function get_news_id($id)
	{
		# code...

		if(isset($this->newsContent[$id])) return $this->newsContent[$id];
		else return null;
	}
	public function get_product_id($id)
	{
		# code...

		if(isset($this->productContent[$id])) return $this->productContent[$id];
		else return null;
	}



}

?>