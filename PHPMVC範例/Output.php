<?php

// 輸出類別
class Output
{

    // 輸出類型
    private $type;

    // 樣版變數
	private $vars = array ();

    // 建構函式
    public function __construct($type)
    {
        $this->type = in_array($type, array('HTML', 'RSS'))
                    ? $type
                    : 'HTML';
    }

    // 設定樣版變數
    // 這裡不用 __set 是因為我不想在 PHP 程式裡直接對物件指定屬性
    public function setVar($tpl_var, $value = null)
    {
        if (is_array($tpl_var))
        {
            foreach ($tpl_var as $key => $val)
            {
                if ($key != '')
                {
                    $this->vars[$key] = $val;
                }
            }
        }
        else
        {
            if ($tpl_var != '')
            {
                $this->vars[$tpl_var] = $value;
            }
        }
    }

    // 自動取得對應的樣版變數
    // 在樣版裡直接取得變數會比較方便
	private function __get($name)
	{
		return isset($this->vars[$name]) ? $this->vars[$name] : NULL;
	}

    // 依照類型輸出結果
    // 輸出前先用 header 函式讓瀏覽器得知正確的輸出型態與編碼
    public function render($template_file = '')
    {
        if ('HTML' == $this->type)
        {
            // 輸出 HTML
            header('Content-Type: text/html; charset=utf-8');
            echo $this->fetchHTML('templates/' . $template_file);
        }
        else
        {
            // 輸出 RSS
            header('Content-Type: text/xml; charset=utf-8');
            echo $this->fetchRSS();
        }
    }

    // 擷取 HTML 結果
    // 透過 Output Buffer 來擷取結果，這樣方便視覺套版
    private function fetchHTML($template_file)
    {
        $html = '';
        ob_start();
        include $template_file;
        $html = ob_get_contents();
        ob_end_clean();
        return $html;
    }
    
    // 擷取 RSS 結果
    // 因為 RSS 格式固定，所以直接使用字串串接
    private function fetchRSS()
    {
        $xml = '';
        $xml .= '<' . '?xml version="1.0" encoding="utf-8"?' . '>' . "\n";
        $xml .= '<rss version="2.0">';
        $xml .= '<channel>';
        $xml .= '<title>TEST</title>';
        $xml .= '<description>TEST</description>';
        foreach ($this->items as $item)
        {
            $xml .= '<item>';
            $xml .= '<title>' . $item['title'] . '</title>';
            $xml .= '<description>' . $item['body'] . '</description>';
            $xml .= '</item>';
        }
        $xml .= '</channel>';
        $xml .= '</rss>';
        return $xml;
    }

}