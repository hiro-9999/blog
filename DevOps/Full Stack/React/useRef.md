# 再レンダリングは必要なく値のみを変更して保持するために使えたり、コンポーネントの前後のレンダリング間で値を保持し続けたい場合に、useRef()が使えます。
https://qiita.com/tell-y/items/1c035292a23773a2ed0a

'''
const Text = () => {
  const textRef = useRef('');
  textRef.current = 'hoge';
  return <div>{textRef.current}</div>;
}

const App = () => {
  const videoRef = useRef();
  useEffect(() => {
    videoRef.current.src =
      'https://sample-videos.com/video123/mp4/240/big_buck_bunny_240p_10mb.mp4';
  }, []);
  return (
    <div className="App">
      <h1>useRef with Video</h1>
      <video ref={videoRef} controls width={360} height={240} />
    </div>
  );
};


const App = () => {
  const textInputRef = useRef();
  return (
    <div className="App">
      <h1>useRef with Text Input</h1>
      <button onClick={() => textInputRef.current.focus()}>Focus Input</button>
      <input ref={textInputRef} type="text" />
    </div>
  );
};
'''
