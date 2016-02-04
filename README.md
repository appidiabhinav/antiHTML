# antiHTML
Anti-HTML is an HTML generator. 
Anti-HTML supports all HTML5 Tags and Attributes.

#How it works?
For example if you want to bold a text in your code, all you have to do is call this function
`echo ht_b('This text will be bold');`

Let's assume you want to do an inline style in your html code, here is how you go about it:
```
echo ht_div('The text in the div', ['class' => 'myCustomDiv', 'id' => 'myDivId');
```

------------------------------
