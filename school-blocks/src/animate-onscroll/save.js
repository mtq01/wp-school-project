import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';

export default function save( { attributes } ) {
    // get the animation value chosen by user in the sidebar
    const { animation } = attributes;

    // pass value to the 'data-aos' attribute
    const blockProps = useBlockProps.save({
        'data-aos': animation
    });

    return (
        <div { ...blockProps }>
            {/* create the content of whatever blocks are nested inside */}
            <InnerBlocks.Content />
        </div>
    );
}