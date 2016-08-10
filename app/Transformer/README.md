Transformer.php 
在这个抽象类里面定义了一个transforms方法和transform抽象方法

LessonTransformer.php 是继承Transformer.php 的Transformer抽象类
在里面实现了抽象方法transform

在其他类里面使用  依赖注入 来完成

如在控制器LessonTransformer.php中添加如下代码

    protected $lessontf;

     //依赖注入
     public function __construct(LessonTransformer $trandformer)
     {
        $this->lessontf=$trandformer;
     }
